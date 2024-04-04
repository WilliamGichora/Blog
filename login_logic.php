<?php
require 'Configurations/database.php';

if (isset($_POST['submit'])) {
    $username_email = filter_var($_POST['username_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$username_email) {
        $_SESSION['login'] = 'Username or email required';
    } elseif (!$password) {
        $_SESSION['login'] = 'Password required';
    } else {
        $getUser_query = "SELECT * FROM users WHERE username='$username_email' OR email='$username_email'";
        $getUser_result = mysqli_query($conn, $getUser_query);

        if (mysqli_num_rows($getUser_result) == 1) {
            $user_details = mysqli_fetch_assoc($getUser_result);
            $dbPassword = $user_details['password'];

            if (password_verify($password, $dbPassword)) {
                $_SESSION['user_ID'] = $user_details['id'];

                if ($user_details['is_admin'] == 1) {
                    $_SESSION['userIsAdmin'] = true;
                }

                header('location:' . ROOT_URL . 'Admin Pages/');
            } else {
                $_SESSION['login'] = "Please Chec your input";
            }
        } else {
            $_SESSION['login'] = 'User not found!!!';
        }
    }

    if (isset($_SESSION['login'])) {
        $_SESSION['login-data'] = $_POST;
        //unset($_SESSION['login']);
        header('location:' . ROOT_URL . 'Login.php');
        die();
    }
} else {
    header('location:' . ROOT_URL . 'Login.php');
}
