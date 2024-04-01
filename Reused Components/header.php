<?php
require 'Configurations/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="container nav_container">
            <a href="./index.php" class="nav_logo">SEMEZANA</a>
            <ul class="nav_items">
                <li><a href="<?= ROOT_URL?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL?>contact.php">Contact</a></li>
                <li><a href="<?= ROOT_URL?>signUp.php">Register</a></li>
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="./Assets/images/User.png" alt="">
                    </div>
                    <ul>
                        <li><a href="<?= ROOT_URL?>Admin Pages/dashboard.html">Dashboard</a></li>
                        <li><a href="<?= ROOT_URL?>logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="nav_open-btn"><i class="uil uil-bars"></i></button>
            <button id="nav_close-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>