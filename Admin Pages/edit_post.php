<?php include 'Admin Components/header.php' ?>
<section class="form_section">
    <div class="container form_section-container">
        <h2>Edit Posts</h2>
        <div class="alert_message error">
            <p>This is an Error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" name="" id="" placeholder="Title">
            <select name="" id="">
                <option value="1">Music and Art</option>
                <option value="2">Science and Technology</option>
                <option value="3">Business</option>
                <option value="4">Politics</option>
                <option value="5">Food</option>
                <option value="6">Wildlife</option>
            </select>
            <textarea name="" id="" rows="10">Body</textarea>
            <div class="form_control inline">
                <input type="checkbox" name="" id="" checked>
                <label for="is_feautured">Featured</label>
            </div>
            <div class="form_control">
                <label for="thumbnail">Change Thumbnail</label>
                <input type="file" name="" id="thumbnail">
            </div>
            <button type="submit" class="Otherbtn">Update Post</button>
        </form>
    </div>
</section>

<?php include '../Reused Components/footer.php'  ?>