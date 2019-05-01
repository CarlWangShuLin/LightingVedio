<?php
require_once('../includes/db.php');

if (isset($_POST['submit'])) {
    $an_id = $_POST['an_id'];
    $an_name = $_POST['an_name'];
    $an_contents = $_POST['an_contents'];


    $query  = "INSERT INTO announcements (an_id, an_name, an_contents) ";
    $query .= "VALUES ('$an_id', '$an_name', '$an_contents') ";

    //echo $query;
    header('Location: admin.php?page=an_co');
    mysqli_query($connection, $query);
}

mysqli_close($connection);
?> 