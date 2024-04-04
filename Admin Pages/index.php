<?php include 'Admin Components/header.php' ?>

<section class="dashboard">
    <div class="container dashboard_container">

        <button class="sidebar_toggle" id="show_sidebar"><i class="uil uil-angle-right-b"></i></button>
        <button class="sidebar_toggle" id="hide_sidebar"><i class="uil uil-angle-left-b"></i></button>
        <aside>
            <ul>
                <li>
                    <a href="./add-post.php">
                        <i class="uil uil-pen"></i>
                        <h5>Add Posts</h5>
                    </a>
                </li>
                <li>
                    <a href="./index.php">
                        <i class="uil uil-pen"></i>
                        <h5>Manage Posts</h5>
                    </a>
                </li>
                <?php if (isset($_SESSION['userIsAdmin'])) : ?>
                    <li>
                        <a href="./add_user.php">
                            <i class="uil uil-pen"></i>
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="./manage_users.php" class="active">
                            <i class="uil uil-pen"></i>
                            <h5>Manage Users</h5>
                        </a>
                    </li>
                    <li>
                        <a href="./add_category.php">
                            <i class="uil uil-pen"></i>
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="./manage-categories.php">
                            <i class="uil uil-pen"></i>
                            <h5>Manage Category</h5>
                        </a>
                    </li>
                <?php endif ?>
            </ul>
        </aside>

        <main>
            <h2>Manage Posts</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Importance of family</td>
                        <td>Family</td>
                        <td><a href="edit_post.php" class="Otherbtn sm">Edit</a></td>
                        <td><a href="" class="Otherbtn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Conservation of wildlife</td>
                        <td>Wildlife</td>
                        <td><a href="edit_post.php" class="Otherbtn sm">Edit</a></td>
                        <td><a href="" class="Otherbtn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>History of Germany</td>
                        <td>Music</td>
                        <td><a href="edit_post.php" class="Otherbtn sm">Edit</a></td>
                        <td><a href="" class="Otherbtn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Current Trends in the Tech Space:</td>
                        <td>Science and Technology</td>
                        <td><a href="edit_post.php" class="Otherbtn sm">Edit</a></td>
                        <td><a href="" class="Otherbtn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Learning Music Theory:</td>
                        <td>Art and Music</td>
                        <td><a href="edit_post.php" class="Otherbtn sm">Edit</a></td>
                        <td><a href="" class="Otherbtn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>How to Travel in 2024:</td>
                        <td>Travel</td>
                        <td><a href="edit_post.php" class="Otherbtn sm">Edit</a></td>
                        <td><a href="" class="Otherbtn sm danger">Delete</a></td>
                    </tr>
                    
                </tbody>
            </table>
        </main>

    </div>
</section>

<?php include '../Reused Components/footer.php'  ?>