<?php
require_once('../includes/db.php');
//require_once('../includes/head.php');

if (isset($_POST[submit])) {
    $an_id = $_POST['an_id'];
    $an_name = $_POST['an_name'];
    $an_contents = $_POST['an_contents'];
    $ac_id = $_POST['ac_id'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE announcements SET an_id='$an_id', an_name='$an_name', an_contents='$an_contents', ac_id='$ac_id' ";
$query .= "WHERE an_id= '$an_id'";

//echo $query;
header('Location: an_co_table.php');
mysqli_query($connection, $query);

}



?>
    
<div id="employee">
<P>Please enter the data </p>
<form action="updatean.php" method="post">
    <input type="hidden" name="an_id" value="
<?php echo $an_id; ?>">
<label>Announcement ID</label>
    <input type="number" name="an_id" required>
    <label>Announcement name</label>
    <input type="text" name="an_name" required>
    <label>Announcement content</label>
    <input type="text" name="an_contents" required>
    <label>Account ID</label>
    <input type="number" name="ac_id" required>
    <input type="submit" name="submit">
</form>
</div>

<?php
//5. close db connection
mysqli_close($connection);

?>



