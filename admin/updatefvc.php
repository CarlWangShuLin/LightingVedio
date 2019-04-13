<?php
require_once('../includes/db.php');
//require_once('../includes/head.php');

if (isset($_POST[submit])) {
    $vd_id = $_POST['vd_id'];
    $cl_id = $_POST['cl_id'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE cl_vd SET cl_id='$cl_id', vd_id='$vd_id' ";
$query .= "WHERE cl_id= '$cl_id'";

//echo $query;
header('Location: f_table.php');
mysqli_query($connection, $query);

}



?>
    
<div id="employee">
<P>Please enter the data </p>
<form action="updatefvc.php" method="post">
    <input type="hidden" name="cl_id" value="
<?php echo $cl_id; ?>">
    <label>Account ID</label>
    <input type="number" name="cl_id" required>
    <label>Comment ID</label>
    <input type="number" name="vd_id" required>
    <input type="submit" name="submit">
</form>
</div>

<?php
//5. close db connection
mysqli_close($connection);

?>



