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
header('Location: table.php');
mysqli_query($connection, $query);

}



?>
    
<div id="employee">
<P>Please enter the data </p>
<form action="updatecm.php" method="post">
    <input type="hidden" name="ac_id" value="
<?php echo $ac_id; ?>">
<label>Comment ID</label>
    <input type="number" name="cm_id" required>
    <label>Comment name</label>
    <input type="text" name="cm_name" required>
    <label>Comment content</label>
    <input type="text" name="cm_contents" required>
    <input type="submit" name="submit">
</form>
</div>

<?php
//5. close db connection
mysqli_close($connection);

?>



