<?php
function emptInputSignup($fname, $lname, $email, $password)
{
    $result;
    if (empty($fname) || empty($lname) || empty($email) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidUid($userName)
{
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function emailExists($conn, $email)
{
    $sql = "SELECT * FROM users WHERE userEmail=?;";
    $query = $conn->prepare($sql);
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();
    return $result->num_rows > 0;
}
function verifyLogin($conn, $email, $password)
{
    $sql = "SELECT userId,userFName,userPwd,userType FROM users WHERE userEmail=? LIMIT 1;";
    $query = $conn->prepare($sql);
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();
    $exists = $result->num_rows > 0;
    if (!$exists) {
        return false;
    }
    $arr = ($result->fetch_assoc());
    $verified = password_verify($password, $arr['userPwd']);
    return $verified ? $arr : false;
}
function createUser($fname, $lname, $email, $password)
{
    $sql = "INSERT INTO users (userFName,userLName,userEmail,userPwd) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_init($stmt, $sql)) {
        header("location:../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_parm($stmt, "ssss", $fname, $lname, $email, $hashedPwd);
    myaqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    if (!mysqli_stmt_init($stmt, $sql)) {
        header("location:../signup.php?error=none");
        exit();
    }
}
function emptInputlogin($email, $password)
{
    if (($email && $email != '') || ($password && $password != '')) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function loginUserser($conn, $email, $password)
{

    $check = verifyLogin($conn, $email, $password);
    if (!$check) {
        header("location:../login.php?error=wronglogin");
        exit();
    }
    session_start();

    $_SESSION["userid"] = $check["userId"];
    $_SESSION["username"] = $check["userFName"];
    $_SESSION["user_type"] = $check["userType"];
    header("location:../index.php");
    exit();
}
function listUsers($conn)
{
    $page = $_GET['page'] ?? 1;
    $per_page = 15;
    $start = ($page - 1) * $per_page;
    $sql = "SELECT * FROM users ";
    $email = isset($_GET['email']) ? $_GET['email'] : null;
    $name = isset($_GET['name']) ? $_GET['name'] : null;
    if ($email == '')
        $email = null;
    if ($name == '')
        $name = null;
    if ($email) {
        $sql .= " where userEmail= ?";
    }
    if ($name) {
        $sql .= " where concat(userFName,' ',userLName) like concat('%',?,'%')";
    }
    $sql .= " LIMIT ? OFFSET ?";
    $query = $conn->prepare($sql);

    if (!$email && !$name) {
        $query->bind_param("ss", $per_page, $start);
    }
    if ($email && !$name) {
        $query->bind_param("sss", $email, $per_page, $start);
    }
    if ($name && !$email) {
        $query->bind_param("sss", $name, $per_page, $start);
    }
    if ($name && $email) {
        $query->bind_param("sss", $email, $name, $per_page, $start, $name);
    }
    $query->execute();
    $result = $query->get_result();
    $arr = ($result->fetch_all(MYSQLI_ASSOC));
    return $arr;
}
function pagesCount($conn)
{
    $per_page = 15;
    $sql = "SELECT (count(userId)/?) as pages FROM users";
    $query = $conn->prepare($sql);
    $query->bind_param("s", $per_page);
    $query->execute();
    $result = $query->get_result();
    $arr = ($result->fetch_assoc());
    return $arr['pages'];
}
function viewCount($conn)
{
    $sql = "SELECT value FROM info WHERE name='visits_count'";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->get_result();
    $arr = ($result->fetch_assoc());
    return $arr['value'];
}
function updateCounter($conn)
{
    if (isset($_SESSION['user_type'])) {
        if ($_SESSION['user_type'] == 1)
            return;
    }
    $sql = "UPDATE info SET value=value+1 WHERE name='visits_count'";
    $query = $conn->prepare($sql);
    $r = $query->execute();
    return $r != null;
}
