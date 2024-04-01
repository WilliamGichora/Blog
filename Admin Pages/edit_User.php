<?php include 'Admin Components/header.php' ?>

<section class="form_section">
    <div class="container form_section-container">
        <h2>Edit User</h2>
        <div class="alert_message error">
            <p>This is an Error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" name="" id="" placeholder="First Name">
            <input type="text" name="" id="" placeholder="last Name">
            <select name="" id="">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <button type="submit" class="Otherbtn">Update User </button>
        </form>
    </div>
</section>

<?php include '../Reused Components/footer.php'  ?>