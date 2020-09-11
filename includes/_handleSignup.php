<?php

$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbh-inc.php';
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_pwd'];

    $existSql = "SELECT * FROM signin WHERE email='$email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
        $showError = "Email Already Exist";
    } else {
        if ($password == $cpassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO signin (fullname, email, password, mnumber, fwhere, ainterest) VALUES ('$fullname', '$email', '$hash', '$mnumber', '$fwhere', '$ainterest')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
                header("Location: ../index.php?signupsuccess=true");
                exit();
            }
        } else {
            $showError = "Passwords Do Not Match";
        }
    }
    header("Location: ../index.php?signupsuccess=false&error=$showError");
}
