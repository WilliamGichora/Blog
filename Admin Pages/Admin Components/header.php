<?php
require 'Admin Configurations/database.php';

if (isset($_SESSION['user_ID'])) {
    $id=filter_var($_SESSION['user_ID'], FILTER_SANITIZE_NUMBER_INT);
    $query= "SELECT avatar FROM users WHERE id='$id'";
    $result= mysqli_query($conn,$query);
    $avatar=mysqli_fetch_assoc($result);
}

if(!isset($_SESSION['user_ID'])){
    header('location:' .ROOT_URL. 'Login.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link rel="stylesheet" href="<?= ROOT_URL ?>styles/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="container nav_container">
            <a href="<?= ROOT_URL ?>index.php" class="nav_logo">SEMEZANA</a>
            <ul class="nav_items">
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>

                <?php if (isset($_SESSION['user_ID'])) : ?>
                    <li class="nav_profile">
                        <div class="avatar">
                        <img src="<?= ROOT_URL . 'Assets/images/' .$avatar['avatar'] ?>" alt="">
                        </div>
                        <ul>
                            <li><a href="<?= ROOT_URL ?>Admin Pages/index.php">Dashboard</a></li>
                            <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li><a href="<?= ROOT_URL ?>Login.php">Login</a></li>
                <?php endif ?>
                
            </ul>

            <button id="nav_open-btn"><i class="uil uil-bars"></i></button>
            <button id="nav_close-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>