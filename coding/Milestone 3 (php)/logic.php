<?php

// Include config file
require_once "db_conn.php";

$uname = "cen4010_fa21_g01";
$password = "ZsMfJ44QjZ";
$db_name = "cen4010_fa21_g01";


$link = mysqli_connect($sname, $uname, $password, $db_name);
// Don't display server errors 
ini_set("display_errors", "off");

// Get data to display on index page
$sql = "SELECT * FROM posts";
$query = mysqli_query($link, $sql);

// Create a new post
if (isset($_REQUEST['new_post'])) {
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

    $sql = "INSERT INTO posts(title, content) VALUES('$title', '$content')";
    mysqli_query($conn, $sql);

    echo $sql;

    header("Location: starter.php?info=added");
    exit();
}

// Get post data based on id
if (isset($_REQUEST['user_post_id'])) {
    $id = $_REQUEST['user_post_id'];
    $sql = "SELECT * FROM posts WHERE user_post_id = $id";
    $query = mysqli_query($conn, $sql);
}

// Delete a post
if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM posts WHERE user_post_id = $id";
    mysqli_query($conn, $sql);

    header("Location: starter.php");
    exit();
}

// Update a post
if (isset($_REQUEST['update'])) {
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $content = $_REQUEST['content'];

    $sql = "UPDATE posts SET title = '$title', content = '$content' WHERE id = $id";
    mysqli_query($conn, $sql);

    header("Location: starter.php");
    exit();
}
