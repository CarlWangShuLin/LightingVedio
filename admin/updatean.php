<?php
require_once('../includes/db.php');

if (isset($_POST[submit])) {
    $an_id = $_POST['an_id'];
    $an_name = $_POST['an_name'];
    $an_contents = $_POST['an_contents'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE announcements SET an_id='$an_id', an_name='$an_name', an_contents='$an_contents' ";
$query .= "WHERE an_id= '$an_id'";

//echo $query;
header('Location: admin.php?page=an_co');
mysqli_query($connection, $query);

}

//5. close db connection
mysqli_close($connection);

?>



