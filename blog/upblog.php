<?php
require_once('../includes/db.php');
date_default_timezone_set('prc');

if (isset($_POST['submit'])) {
    $id = $_POST['bg_id'];
    $title = $_POST['bg_title'];
    $contents = $_POST['bg_contents'];
    $date = Date('y-m-d H:i:s',time());

    // 2. Do a query (update information)
    $query = "UPDATE blogs SET bg_title = '$title' , bg_contents = '$contents' , bg_date = '$date' ";
    $query .= "WHERE bg_id = $id ";
    //echo $query;
    header('Location: blogs.php');
    mysqli_query($connection, $query);
}

// 5. close db connection
mysqli_close($connection);
?> 