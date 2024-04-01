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
                    <a href="./dashboard.php" class="active">
                        <i class="uil uil-pen"></i>
                        <h5>Manage Posts</h5>
                    </a>
                    <a href="./add_user.php">
                        <i class="uil uil-pen"></i>
                        <h5>Add User</h5>
                    </a>
                    <a href="./manage_users.php">
                        <i class="uil uil-pen"></i>
                        <h5>Manage Users</h5>
                    </a>
                    <a href="./add_category.php">
                        <i class="uil uil-pen"></i>
                        <h5>Add Category</h5>
                    </a>
                    <a href="./manage-categories.php">
                        <i class="uil uil-pen"></i>
                        <h5>Manage Category</h5>
                    </a>
                </li>
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
                        <td>Conserving Wildlife</td>
                        <td>Wildlife</td>
                        <td><a href="./edit_category.html" class="Otherbtn sm">Edit</a></td>
                        <td><a href="" class="Otherbtn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Jane Doe</td>
                        <td>Art</td>
                        <td><a href="./edit_category.html" class="Otherbtn sm">Edit</a></td>
                        <td><a href="" class="Otherbtn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Alex Mbogo</td>
                        <td>Music</td>
                        <td><a href="./edit_category.html" class="Otherbtn sm">Edit</a></td>
                        <td><a href="" class="Otherbtn sm danger">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </main>

    </div>
</section>

<?php include '../Reused Components/footer.php'  ?>