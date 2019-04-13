<?php
require_once('../includes/db.php');
//require_once('../includes/head.php');

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
header('Location: b_v_table.php');
mysqli_query($connection, $query);

}



?>
    
<div id="employee">
<P>Please enter the data </p>
<form action="updatebg.php" method="post">
    <input type="hidden" name="bg_id" value="
<?php echo $bg_id; ?>">
<label>Blog id</label>
    <input type="number" name="bg_id" required>
    <label>Blog title</label>
    <input type="text" name="bg_title" required>
    <label>Blog date</label>
    <input type="date" name="bg_date" required>
    <label>Blog contents</label>
    <input type="text" name="bg_contents" required>
    <label>Account id</label>
    <input type="number" name="ac_id" required>
    <input type="submit" name="submit">
</form>
</div>

<?php
//5. close db connection
mysqli_close($connection);

?>



