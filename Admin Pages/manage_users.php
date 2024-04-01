<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>

    <nav>
        <div class="container nav_container">
            <a href="../index.html" class="nav_logo">SEMEZANA</a>
            <ul class="nav_items">
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./about.html">About</a></li>
                <li><a href="./services.html">Services</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li><a href="./signUp.html">Register</a></li>
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="../Assets/images/Author1.png" alt="">
                    </div>
                    <ul>
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="nav_open-btn"><i class="uil uil-bars"></i></button>
            <button id="nav_close-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <section class="dashboard">
        <div class="container dashboard_container">

            <button class="sidebar_toggle" id="show_sidebar"><i class="uil uil-angle-right-b"></i></button>
            <button class="sidebar_toggle" id="hide_sidebar"><i class="uil uil-angle-left-b"></i></button>
            <aside>
                <ul>
                    <li>
                        <a href="./add-post.html">
                            <i class="uil uil-pen"></i>
                            <h5>Add Posts</h5>
                        </a>
                        <a href="./dashboard.html">
                            <i class="uil uil-pen"></i>
                            <h5>Manage Posts</h5>
                        </a>
                        <a href="./add_user.html">
                            <i class="uil uil-pen"></i>
                            <h5>Add User</h5>
                        </a>
                        <a href="./manage_users.html" class="active">
                            <i class="uil uil-pen"></i>
                            <h5>Manage Users</h5>
                        </a>
                        <a href="./add_category.html">
                            <i class="uil uil-pen"></i>
                            <h5>Add Category</h5>
                        </a>
                        <a href="./manage-categories.html">
                            <i class="uil uil-pen"></i>
                            <h5>Manage Category</h5>
                        </a>
                    </li>
                </ul>
            </aside>

            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alex Mbogo</td>
                            <td>Alexis</td>
                            <td><a href="./edit_category.html" class="Otherbtn sm">Edit</a></td>
                            <td><a href="" class="Otherbtn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Jane Doe</td>
                            <td>Doe Man</td>
                            <td><a href="./edit_category.html" class="Otherbtn sm">Edit</a></td>
                            <td><a href="" class="Otherbtn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Alex Mbogo</td>
                            <td>Alexis</td>
                            <td><a href="./edit_category.html" class="Otherbtn sm">Edit</a></td>
                            <td><a href="" class="Otherbtn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                    </tbody>
                </table>
            </main>

        </div>
    </section>

    <footer class="footer">
        <div class="footer_socials">
            <a href="" target="_blank"><i class="uil uil-whatsapp"></i></a>
            <a href="" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            <a href="" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>
    </footer>

    <script src="../scripts/index.js"></script>
</body>

</html>