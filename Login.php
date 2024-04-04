<?php
//session_start();
require 'Configurations/constants.php';

$username_email = $_SESSION['login-data']['username_email'] ?? null;
$password = $_SESSION['login-data']['password'] ?? null;
unset($_SESSION['login-data']);
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
            <h2 id="login">Login</h2>
            <?php if (isset($_SESSION['registration-success'])) : ?>
                <div class="alert_message success">
                    <p>
                        <?= $_SESSION['registration-success'];
                        unset($_SESSION['registration-success']) ?>;

                    </p>
                </div>

            <?php elseif (isset($_SESSION['login'])) : ?>
                <div class="alert_message error">
                    <p>
                        <?= $_SESSION['login'];
                        unset($_SESSION['login']) ?>;

                    </p>
                </div>

            <?php endif ?>


            <form action="<?= ROOT_URL ?>login_logic.php" method="post">
                <input type="text" name="username_email" id="" value="<?= $username_email ?>" placeholder="username_email">
                <input type="password" name="password" id="" value="<?= $password ?>" placeholder="password">
                <button type="submit" name="submit" class="Otherbtn">Login</button>
                <small>Don't have an Account?<a href="./signUp.php" style="color: rgb(42, 28, 248);">Register</a></small>
            </form>
        </div>
    </section>
</body>

</html>