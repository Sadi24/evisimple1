<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (!$email || !$password) {
        header("location:../login.php?error=emptyInput");
        exit();
    }
    if (loginUserser($conn, $email, $password)) {
    } else {
        header("location:../login.php");
        exit();
    }
}
