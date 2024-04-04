<?php include 'Admin Components/header.php' ?>

<section class="form_section">
    <div class="container form_section-container">
        <h2>Add Posts</h2>
        <div class="alert_message error">
            <p>This is an Error message</p>
        </div>
        <form action="<?=ROOT_URL?>Admin Pages/add-post-logic.php" enctype="multipart/form-data" method="post">
            <input type="text" name="title" id="" placeholder="Title">
            <select name="category" id="">
                <option value="1">Music and Art</option>
                <option value="2">Science and Technology</option>
                <option value="3">Business</option>
                <option value="4">Politics</option>
                <option value="5">Food</option>
                <option value="6">Wildlife</option>
            </select>
            <textarea name="body" id="" rows="10">Body</textarea>
            <div class="form_control inline">
                <input type="checkbox" name="is_featured" id="" value="1">
                <label for="is_feautured">Featured</label>
            </div>
            <div class="form_control">
                <label for="thumbnail">Add Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail">
            </div>
            <button type="submit" class="Otherbtn">Add Post</button>
        </form>
    </div>
</section>

<?php include '../Reused Components/footer.php'  ?>