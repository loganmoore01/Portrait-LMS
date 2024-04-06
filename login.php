<?php
session_start();
#include "dbconn.php";

if (isset($_POST['uname']) && isset($_POST['password'])){

    $uname = $_POST['uname'];
    $pass = $_POST['password'];

    if (empty($uname)) {
        header("location: index.php?error=username-required");
        exit();
    }
    else if (empty($pass)) {
        header("location: index.php?error=password-required");
        exit();
    }
    else{

        if ($uname && $pass == "admin") {
            $_SESSION['uname'] = "admin";
            $_SESSION['id'] = "000001";
            $_SESSION['em'] = "admin@portrait.edu";
            header("location: home.php");
            exit();
        }
        else {
            header("location: index.php?error=incorrectlogin");
            exit();
        }


        # Future code to grab logins from db
        /*
        $sql = "SELECT * FROM users WHERE uname = 'uname' AND password = 'password';";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['uname'] === $uname && $row['password'] === $pass) {
                $_SESSION['uname'] = $row['uname'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("location: home.php");
                exit();
            }
            else{
                header("location: index.php?error=incorrect-username-or-password");
                exit();
            }
        }
        else{
            header("location: index.php?error=incorrect-username-or-password");
            exit();
        }*/

    }

}
else{
    header("location: index.php?error");
    exit();
}