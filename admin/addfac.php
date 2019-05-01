<?php
require_once('../includes/db.php');

if (isset($_POST['submit'])) {
    $cm_id = $_POST['cm_id'];
    $ac_id = $_POST['ac_id'];


    $query  = "INSERT INTO ac_cm (ac_id, cm_id) ";
    $query .= "VALUES ('$ac_id', '$cm_id') ";

    //echo $query;
    header('Location: admin.php?page=function');
    mysqli_query($connection, $query);
}

mysqli_close($connection);
?> 