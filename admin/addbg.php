<?php
require_once('../includes/db.php');
require_once('../includes/tableheader.php');

//require_once('../includes/head.php');

if (isset($_POST['submit'])) {
    $bg_id = $_POST['bg_id'];
    $bg_title = $_POST['bg_title'];
    $bg_date = $_POST['bg_date'];
    $bg_contents = $_POST['bg_contents'];
    $ac_id = $_POST['ac_id'];


    $query  = "INSERT INTO blogs (bg_id, bg_title, bg_date, bg_contents, ac_id) ";
    $query .= "VALUES ('$bg_id', '$bg_title', '$bg_date', '$bg_contents', '$ac_id') ";

    //echo $query;
    header('Location: admin.php?page=blog_video');
    mysqli_query($connection, $query);
}


mysqli_close($connection);
?> 