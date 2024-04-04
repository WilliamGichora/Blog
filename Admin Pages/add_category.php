<?php include 'Admin Components/header.php'; ?>

<section class="form_section">
    <div class="container form_section-container">
        <h2>Add Category</h2>
        <?php if (isset($_SESSION['addCategory'])) : ?>
            <div class="alert_message error">
                <p>
                    <?= $_SESSION['addCategory']; ?>
                </p>
            </div>
            <?php unset($_SESSION['addCategory']); ?>
        <?php endif; ?>
        <form action="<?= ROOT_URL ?>Admin Pages/add_category.php" method="post">
            <input type="text" name="title" id="" placeholder="Title">
            <textarea name="description" id="" rows="4" placeholder="Description">Description</textarea>
            <button type="submit" name="mysubmit" class="Otherbtn">Add Category</button>
        </form>
    </div>
</section>

<?php include '../Reused Components/footer.php'; ?>