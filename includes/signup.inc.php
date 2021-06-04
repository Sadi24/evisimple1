<?php
if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $userName = "$fname $lname";
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once 'dbh.inc.php';
    require_once 'signup_functions.inc.php';
    $validInput = true;
    $errors = [];
    $validations = [
        'email' => [
            function ($input, $conn = null) {
                $valid = filter_var($input, FILTER_VALIDATE_EMAIL) != '';
                if ($valid) {
                    return ['status' => true, 'error' => ''];
                }
                return ['status' =>  false, 'error' => 'invalidemail'];
            },
            function ($input, $conn = null) {
                $sql = "SELECT * FROM users WHERE userEmail=?;";
                $query = $conn->prepare($sql);
                $query->bind_param("s", $input);
                $query->execute();
                $result = $query->get_result();
                if ($result->num_rows > 1) {
                    return [
                        'status' => false,
                        'error' => 'emailExists'
                    ];
                }
                return [
                    'status' => true,
                    'error' => ''
                ];
            }
        ],
        'fname' => [
            function ($input, $conn = null) {
                return ['status' => true, 'error' => ''];
            }
        ],
        'lname' => [
            function ($input, $conn = null) {
                return ['status' => true, 'error' => ''];
            }
        ],
        'password' => [
            function ($input, $conn = null) {
                return ['status' => strlen($input) > 1, 'error' => strlen($input) > 8 ? 'length_not_enough' : ''];
            }
        ]
    ];
    $keys = array_keys($_POST);
    foreach ($keys as $key) {
        if ($key == 'submit')
            continue;
        if (!$_POST[$key]) {
            $validInput = false;
            header("location:../signup.php?error=emptyinput");
            exit();
            array_push($errors, $key . '_empty');
        } else {
            foreach ($validations[$key] as $validation) {
                $result = $validation($_POST[$key], $conn);
                if (!$result['status']) {
                    array_push($errors, $key . '_' . $result['error']);
                    header("location:../signup.php?error=" . $result['error']);
                    exit();
                }
            }
        }
    }

    // if (emptInputSignup($fname,$lname,$email,$password) !== false ){
    //     header("location:../signup.php?error=emptyInput");
    //     exit();
    // }
    // if (invalidUid($userName) !== false ){
    //     header("location:../signup.php?error=invalidUid");
    //     exit();
    // }
    // if (invalidEmail($email) !== false ){
    //     header("location:../signup.php?error=invalidEmail");
    //     exit();
    // }
    // if (emailExists($conn,$email) !== false ){
    //     header("location:../signup.php?error=emailtaken");
    //     exit();
    // }
    print_r($errors);
    createNewUser($conn, $fname, $lname, $email, $password);
    header("location:../success.php");
} else {
    header("location:../signup.php");
    exit();
}
