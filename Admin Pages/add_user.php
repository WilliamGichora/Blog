<?php include 'Admin Components/header.php' ?>

<section class="form_section">
    <div class="container form_section-container">
        <h2>Add User</h2>
        <div class="alert_message error">
            <p>This is an Error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" name="" id="" placeholder="First Name">
            <input type="text" name="" id="" placeholder="last Name">
            <input type="text" name="" id="" placeholder="Username">
            <input type="email" name="" id="" placeholder="email">
            <input type="password" name="" id="" placeholder="Create password">
            <input type="password" name="" id="" placeholder="Confirm password">
            <select name="" id="">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <div class="form_control">
                <label for="avatar">Avatar</label>
                <input type="file" name="" id="avatar">
            </div>
            <button type="submit" class="Otherbtn">Add User</button>
        </form>
    </div>
</section>

<?php include '../Reused Components/footer.php'  ?>