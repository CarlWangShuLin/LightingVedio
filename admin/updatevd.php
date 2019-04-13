<?php
require_once('../includes/db.php');
//require_once('../includes/head.php');

if (isset($_POST[submit])) {
    $vd_id = $_POST['vd_id'];
    $vd_name = $_POST['vd_name'];
    $vd_classification = $_POST['vd_classification'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE videos SET vd_id='$vd_id', vd_name='$vd_name', vd_classification='$vd_classification' ";
$query .= "WHERE vd_id= '$vd_id'";

//echo $query;
header('Location: b_v_table.php');
mysqli_query($connection, $query);

}



?>
    
<div id="employee">
<P>Please enter the data </p>
<form action="updatevd.php" method="post">
    <input type="hidden" name="vd_id" value="
<?php echo $vd_id; ?>">
<label>Video ID</label>
    <input type="number" name="vd_id" required>
    <label>Video name</label>
    <input type="text" name="vd_name" required>
    <label>Video classification</label>
    <input type="text" name="vd_classification" required>
    <input type="submit" name="submit">
</form>
</div>

<?php
//5. close db connection
mysqli_close($connection);

?>



