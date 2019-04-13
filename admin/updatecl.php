<?php
require_once('../includes/db.php');
//require_once('../includes/head.php');

if (isset($_POST[submit])) {
    $cl_id = $_POST['cl_id'];
    $cl_name = $_POST['cl_name'];
    $ac_id = $_POST['ac_id'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE collection SET cl_id='$cl_id', cl_name='$cl_name', ac_id='$ac_id' ";
$query .= "WHERE cl_id= '$cl_id'";

//echo $query;
header('Location: an_co_table.php');
mysqli_query($connection, $query);

}



?>
    
<div id="employee">
<P>Please enter the data </p>
<form action="updatecl.php" method="post">
    <input type="hidden" name="cl_id" value="
<?php echo $cl_id; ?>">
<label>Collection ID</label>
    <input type="number" name="cl_id" required>
    <label>Collection name</label>
    <input type="text" name="cl_name" required>
    <label>Account ID</label>
    <input type="number" name="ac_id" required>
    <input type="submit" name="submit">
</form>
</div>

<?php
//5. close db connection
mysqli_close($connection);

?>



