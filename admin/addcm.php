<?php
require_once('../includes/db.php');

if (isset($_POST['submit'])) {
    $cm_id = $_POST['cm_id'];
    $cm_name = $_POST['cm_name'];
    $cm_contents = $_POST['cm_contents'];
    
    $query  = "INSERT INTO comments (cm_id, cm_name, cm_contents) ";
    $query .= "VALUES ('$cm_id', '$cm_name', '$cm_contents') ";

    //echo $query;
    header('Location: admin.php?page=table');
    mysqli_query($connection, $query);
    
}

mysqli_close($connection);
?> 