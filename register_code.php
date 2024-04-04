<?php
require 'Configurations/database.php';

if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createPassword = filter_var($_POST['createPassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmPassword = filter_var($_POST['confirmPassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];


    if (!$firstname) {
        $_SESSION['register'] = "Kindly enter your First Name";
    } elseif (!$lastname) {
        $_SESSION['register'] = "Kindly enter your Last Name";
    } elseif (!$username) {
        $_SESSION['register'] = "Kindly enter your Username";
    } elseif (!$email) {
        $_SESSION['register'] = "Kindly enter a valid Email";
    } elseif (strlen($createPassword) < 8 || strlen($confirmPassword) < 8) {
        $_SESSION['register'] = "Password should be less than 8 chars";
    } elseif (!$avatar['name']) {
        $_SESSION['register'] = "Please add an avatar image";
    } else {
        if ($createPassword !== $confirmPassword) {
            $_SESSION['register'] = "The passwords do not match";
        } else {
            $hashedPassword = password_hash($createPassword, PASSWORD_DEFAULT);


            $userDetailsCheck_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $userCheckResult = mysqli_query($conn, $userDetailsCheck_query);
            if (mysqli_num_rows($userCheckResult) > 0) {
                $_SESSION['register'] = 'Username or Email is already in use';
            } else {
                $time = time();
                $avatar_name = $time . $avatar['name'];
                $avatarTempName = $avatar['tmp_name'];
                $avatarFolderDestinationPath = 'Assets/images/' . $avatar_name;

                $allowed_files = ['png', 'jpg', 'jpg'];
                $extendedName = explode('.', $avatar_name);
                //$extendedName=pathinfo($avatar_name,PATHINFO_EXTENSION);
                $extendedName = end($extendedName);
                if (in_array($extendedName, $allowed_files)) {
                    if ($avatar['size'] < 1000000) {
                        move_uploaded_file($avatarTempName, $avatarFolderDestinationPath);
                    } else {
                        $_SESSION['register'] = 'File is too large. Choose a file less than 1mb';
                    }
                } else {
                    $_SESSION['register'] = 'File should be either .jpg, .png or .jpeg';
                }
            }
        }
    }

    if (isset($_SESSION['register'])) {
        $_SESSION['registrationTempData']=$_POST;
        header('location:' . ROOT_URL . 'signUp.php');
        die();
    } else {
        $insertUser_query = "INSERT INTO users (firstname,lastname,username,email,password,avatar,is_admin) VALUES ('$firstname', '$lastname', '$username', '$email','$hashedPassword','$avatar_name',0)";
        $insertUser_result=mysqli_query($conn,$insertUser_query);
        if (!mysqli_errno($conn)) {
           $_SESSION['registration-success']= "Registration Successful. Please log in";
           header('location:' .ROOT_URL. 'Login.php');
        }
    }
} else {
    header('location:' . ROOT_URL . 'signUp.php');
    die();
}
