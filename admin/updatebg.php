<?php
require_once('../includes/db.php');
require_once('../includes/tableheader.php');

if (isset($_POST[submit])) {
    $bg_id = $_POST['bg_id'];
    $bg_title = $_POST['bg_title'];
    $bg_date = $_POST['bg_date'];
    $bg_contents = $_POST['bg_contents'];
    $ac_id = $_POST['ac_id'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE blogs SET bg_id='$bg_id', bg_title='$bg_title', bg_date='$bg_date', bg_contents='$bg_contents', ac_id='$ac_id' ";
$query .= "WHERE bg_id= '$bg_id'";

//echo $query;
header('Location: admin.php?page=blog_video');
mysqli_query($connection, $query);
}

//5. close db connection
mysqli_close($connection);

?>



