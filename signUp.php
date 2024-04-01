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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <section class="form_section register-main_section">
        <div class="container form_section-container section-1">
            <h2>Sign Up</h2>
            <div class="alert_message error">
                <p>This is an Error message</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" name="" id="" placeholder="First Name" required>
                <input type="text" name="" id="" placeholder="last Name" required>
                <input type="text" name="" id="" placeholder="Username" required>
                <input type="email" name="" id="" placeholder="email" required>
                <input type="password" name="" id="" placeholder="Create password" required>
                <input type="password" name="" id="" placeholder="Confirm password" required>
                <div class="form_control">
                    <label for="avatar">Avatar</label>
                    <input type="file" name="" id="avatar">
                </div>
                <button type="submit" class="Otherbtn">Sign Up</button>
                <small>Already have an account? <a href="./Login.php"
                        style="color: rgb(42, 28, 248);">Login</a></small>
            </form>
        </div>
    </section>
</body>

</html>