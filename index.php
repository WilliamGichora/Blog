<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <link rel="stylesheet" href="./Blog Pages/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav>
        <div class="container nav_container">
            <a href="./index.php" class="nav_logo">SEMEZANA</a>
            <ul class="nav_items">
                <li><a href="./Blog Pages/blog.php">Blog</a></li>
                <li><a href="./Blog Pages/about.php">About</a></li>
                <li><a href="./Blog Pages/services.php">Services</a></li>
                <li><a href="./Blog Pages/contact.php">Contact</a></li>
                <li><a href="./Blog Pages/signUp.php">Register</a></li>
                <li class="nav_profile">
                    <div class="avatar">
                        <img src="./Assets/images/User.png" alt="">
                    </div>
                    <ul>
                        <li><a href="./Blog Pages/dashboard.html">Dashboard</a></li>
                        <li><a href="">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="nav_open-btn"><i class="uil uil-bars"></i></button>
            <button id="nav_close-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <section class="featured">
        <div class="container featured_container">
            <div class="post_thumbnail">
                <img src="./Assets/images/blog1.jpg" alt="first blog">
            </div>
            <div class="post__info">
                <a href="./Blog Pages/category-posts.html" class="category_button">Family</a>
                <h2 class="post_title"><a href="./Blog Pages/post.html">My First Blog website Clone 2024</a></h2>
                <p class="post_body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At quidem reiciendis in fuga
                    consequatur eligendi molestiae, magnam assumenda laborum inventore deleniti. Maiores
                    vel quod at atque officiis sequi blanditiis cupiditate.
                </p>
                <div class="post_author">
                    <div class="post_author-avatar">
                        <img src="./Assets/images/Author1.png" alt="">
                    </div>
                    <div class="post_author-info">
                        <h5>By: Mark Gichora</h5>
                        <small>March 20th 2024, 7.38am</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="posts">
        <div class="container posts_container">
            <article class="post">
                <div class="post_thumbnail">
                    <img src="./Assets/images/wildlifePost.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="./Blog Pages/category-posts.html" class="category_button">Wild Life</a>
                    <h3 class="post_title">
                        <a href="./Blog Pages/post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Soluta, odit.</a>
                    </h3>
                    <p class="post_body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad suscipit dolorem
                        dolore dicta? Accusantium officiis hic modi corrupti expedita laborum laboriosam.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Chris Madeda</h5>
                            <small>March 22 2024, 10pm</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="./Assets/images/wildlifePost.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="./Blog Pages/category-posts.html" class="category_button">Wild Life</a>
                    <h3 class="post_title">
                        <a href="./Blog Pages/post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Soluta, odit.</a>
                    </h3>
                    <p class="post_body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad suscipit dolorem
                        dolore dicta? Accusantium officiis hic modi corrupti expedita laborum laboriosam.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Chris Madeda</h5>
                            <small>March 22 2024, 10pm</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="./Assets/images/wildlifePost.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category_button">Wild Life</a>
                    <h3 class="post_title">
                        <a href="./Blog Pages/post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Soluta, odit.</a>
                    </h3>
                    <p class="post_body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad suscipit dolorem
                        dolore dicta? Accusantium officiis hic modi corrupti expedita laborum laboriosam.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Chris Madeda</h5>
                            <small>March 22 2024, 10pm</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="./Assets/images/wildlifePost.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category_button">Wild Life</a>
                    <h3 class="post_title">
                        <a href="./Blog Pages/post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Soluta, odit.</a>
                    </h3>
                    <p class="post_body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad suscipit dolorem
                        dolore dicta? Accusantium officiis hic modi corrupti expedita laborum laboriosam.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Chris Madeda</h5>
                            <small>March 22 2024, 10pm</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="./Assets/images/wildlifePost.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category_button">Wild Life</a>
                    <h3 class="post_title">
                        <a href="./Blog Pages/post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Soluta, odit.</a>
                    </h3>
                    <p class="post_body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad suscipit dolorem
                        dolore dicta? Accusantium officiis hic modi corrupti expedita laborum laboriosam.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Chris Madeda</h5>
                            <small>March 22 2024, 10pm</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post_thumbnail">
                    <img src="./Assets/images/wildlifePost.jpg" alt="">
                </div>
                <div class="post__info">
                    <a href="" class="category_button">Wild Life</a>
                    <h3 class="post_title">
                        <a href="./Blog Pages/post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Soluta, odit.</a>
                    </h3>
                    <p class="post_body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad suscipit dolorem
                        dolore dicta? Accusantium officiis hic modi corrupti expedita laborum laboriosam.
                    </p>
                    <div class="post_author">
                        <div class="post_author-avatar">
                            <img src="./images/" alt="">
                        </div>
                        <div class="post_author-info">
                            <h5>By: Chris Madeda</h5>
                            <small>March 22 2024, 10pm</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>   
    </section>

    <section class="category_btns">
        <div class="container category_btns-container">
            <a href="" class="category_button">Music and Art</a>
            <a href="" class="category_button">Science and Technology</a>
            <a href="" class="category_button">Business</a>
            <a href="" class="category_button">Politics</a>
            <a href="" class="category_button">Food</a>
            <a href="" class="category_button">Wildlife</a>
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

    <script src="./scripts/index.js"></script>
</body>

</html>