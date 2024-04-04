<?php
require 'Configurations/constants.php';

$firstname = $_SESSION['registrationTempData']['firstname'] ?? null;
$lastname = $_SESSION['registrationTempData']['lastname'] ?? null;
$username = $_SESSION['registrationTempData']['username']?? null;
$email = $_SESSION['registrationTempData']['email'] ?? null;
$createPassword = $_SESSION['registrationTempData']['createPassword'] ?? null;
$confirmPassword = $_SESSION['registrationTempData']['confirmPassword'] ?? null;

unset($_SESSION['registrationTempData'])
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <section class="form_section register-main_section">
        <div class="container form_section-container section-1">
            <h2>Sign Up</h2>
            <?php if (isset($_SESSION['register'])) : ?>
                <div class="alert_message error">
                    <p>
                        <?= $_SESSION['register'];
                        unset($_SESSION['register']) ?>
                    </p>
                </div>
            <?php endif ?>


            <form action="<?= ROOT_URL ?>register_code.php" method="post" enctype="multipart/form-data">
                <input type="text" name="firstname" value="<?= $firstname ?>" id="" placeholder="First Name" >
                <input type="text" name="lastname" value="<?= $lastname ?>" id="" placeholder="last Name">
                <input type="text" name="username" value="<?= $username ?>" id="" placeholder="Username">
                <input type="email" name="email" value="<?= $email ?>" id="" placeholder="email">
                <input type="password" name="createPassword" value="<?= $createPassword ?>" id="" placeholder="Create password">
                <input type="password" name="confirmPassword" value="<?= $confirmPassword ?>" id="" placeholder="Confirm password">
                <div class="form_control">
                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                <button type="submit" class="Otherbtn" name="submit">Sign Up</button>
                <small>Already have an account? <a href="./Login.php" style="color: rgb(42, 28, 248);">Login</a></small>
            </form>
        </div>
    </section>
</body>

</html>