<?php

function createNewUser($conn, $fname, $lname, $email, $password)
{
    $sql = "INSERT INTO users (userFName,userLName,userEmail,userPwd) VALUES (?,?,?,?);";
    $query = $conn->prepare($sql);
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    $query->bind_param("ssss", $fname, $lname, $email, $hashedPwd);
    $stmt = $query->execute();
    if (!$stmt) {
        header("location:../signup.php?error=stmtfailed");
        exit();
    }


    // mysqli_stmt_bind_parm($stmt,"ssss",$fname,$lname,$email,$hashedPwd);
    // myaqli_stmt_execute($stmt);
    // mysqli_stmt_close($stmt);
    // if(!mysqli_stmt_init($stmt,$sql)){
    //     header("location:../signup.php?error=none");
    //     exit();
    // }
}
