<?php
require_once('../includes/db.php');

//require_once('../includes/head.php');

if (isset($_POST[submit])) {
    $cm_id = $_POST['cm_id'];
    $cm_name = $_POST['cm_name'];
    $cm_contents = $_POST['cm_contents'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE comments SET cm_id='$cm_id', cm_name='$cm_name', cm_contents='$cm_contents' ";
$query .= "WHERE cm_id= '$cm_id'";

//echo $query;
header('Location: admin.php?page=table');
mysqli_query($connection, $query);

}

//5. close db connection
mysqli_close($connection);

?>



