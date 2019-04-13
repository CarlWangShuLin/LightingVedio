<?php
require_once('../includes/db.php');
//require_once('../includes/head.php');

if (isset($_POST[submit])) {
    $cm_id = $_POST['cm_id'];
    $ac_id = $_POST['ac_id'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE ac_cm SET ac_id='$ac_id', cm_id='$cm_id' ";
$query .= "WHERE ac_id= '$ac_id'";

//echo $query;
header('Location: f_table.php');
mysqli_query($connection, $query);

}



?>
    
<div id="employee">
<P>Please enter the data </p>
<form action="updatefac.php" method="post">
    <input type="hidden" name="ac_id" value="
<?php echo $ac_id; ?>">
    <label>Account ID</label>
    <input type="number" name="ac_id" required>
    <label>Comment ID</label>
    <input type="number" name="cm_id" required>
    <input type="submit" name="submit">
</form>
</div>

<?php
//5. close db connection
mysqli_close($connection);

?>



