<?php

if(isset($_POST['signup'])) {
    require 'dbh-inc.php';
    
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_pwd = $_POST['confirm_pwd'];
    $mnumber = $_POST['mnumber'];


    
    if (empty($fname) || empty($email) || empty($password) || empty($confirm_pwd) empty($mnumber)) {
        header("Location: ../login.html?error=emptyfields&email='. $email .'");
        exit();
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../login.html?error=invalidmail&email='. $email .'");
        exit();
    } 
    elseif ($password !== $confirm_pwd) {        
        header("Location: ../login.html?error=passwordcheck&email='. $email .'");
        exit();
    } 
    else {
            $sql = "SELECT email FROM signin WHERE email=?";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../signup.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);

                    if ($resultCheck >0) {
                        header("Location: ../login.html?error=emailtaken");
                        exit();
                    } else {
                        $sql = "INSERT INTO signin (fname, email, password, confirm_pwd, mnumber) VALUES (?, ?, ?, ?, ?)";
                        $stmt = mysqli_stmt_init($conn);

                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("Location: ../login.html?error=sqlerror");
                        exit();
                        } else {
                            $hashedpwd1 = password_hash($password, PASSWORD_DEFAULT);
                            $hashedpwd2 = password_hash($confirm_pwd, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ssssi", $fname, $email, $hashedpwd1, $hashedpwd2, $mnumber);
                            mysqli_stmt_execute($stmt);
                            header("Location: ../login.html?signup=success");
                            exit();
                        }
                        }
                    }
            }
        }
            
                    

                    
                    
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../login.html");
            exit();
}