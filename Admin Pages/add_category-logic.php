<?php
require 'Admin Configurations/database.php';

if (isset($_POST['mysubmit'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$title) {
        $_SESSION['addCategory'] = 'Enter Title';
    } elseif (!$description) {
        $_SESSION['addCategory'] = 'Enter Description';
    }

    if (isset($_SESSION['addCategory'])) {
        $_SESSION['addCategory_data'] = $_POST;
        header('location:' . ROOT_URL . 'Admin Pages/add_category.php');
        die();
    } else {
        "INSERT INTO categories (title, description) VALUES ('$title', '$description' ) ";

        $result = mysqli_query($conn, $query);
        if (mysqli_errno($conn)) {
            $_SESSION['addCategory'] = "Could not Add Category";
            header('location:' . ROOT_URL . 'Admin Pages/add_category.php');
            die();
        } else {
            $_SESSION['add-category-success'] = "Category added Successfully";
            header('location:' . ROOT_URL . 'Admin Pages/manage-categories.php');
            die();
        }
    }
}
