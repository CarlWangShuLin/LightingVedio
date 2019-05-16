<?php
require_once('../includes/db.php');

if (isset($_POST['submit'])) {
    $vd_id = $_POST['vd_id'];
    $cm_name = $_POST['cm_name'];
    $cm_contents = $_POST['cm_contents'];


    $query  = "INSERT INTO comments ( cm_name, cm_contents, vd_id) ";
    $query .= "VALUES ('$cm_name', '$cm_contents', '$vd_id') ";

    //echo $query;
    header("Location: videopage.php?id=$vd_id");
    mysqli_query($connection, $query);
}

mysqli_close($connection);
?> 