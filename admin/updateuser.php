<?php
require_once('../includes/db.php');
//require_once('../includes/head.php');

if (isset($_POST[submit])) {
    $ac_id = $_POST['ac_id'];
    $ac_name = $_POST['ac_name'];
    $ac_password = $_POST['ac_password'];
    $ac_age = $_POST['ac_age'];
    $ac_phone = $_POST['ac_phone'];
    $ac_email = $_POST['ac_email'];
    $ac_type = $_POST['ac_type'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE accounts SET ac_id='$ac_id', ac_name='$ac_name', ac_password='$ac_password', ac_age='$ac_age', ac_phone='$ac_phone', ac_email='$ac_email', ac_type='$ac_type' ";
$query .= "WHERE ac_id= '$ac_id'";

//echo $query;
header('Location: table.php');
mysqli_query($connection, $query);

}



?>
    
<div id="employee">
<P>Please enter the data </p>
<form action="updateuser.php" method="post">
    <input type="hidden" name="ac_id" value="
<?php echo $ac_id; ?>">
<label>User ID</label>
    <input type="number" name="ac_id" required>
    <label>Name</label>
    <input type="text" name="ac_name" required>
    <label>Password</label>
    <input type="text" name="ac_password" required>
    <label>Age</label>
    <input type="number" name="ac_age" required>
    <label>Phone</label>
    <input type="number" name="ac_phone" required>
    <label>Email</label>
    <input type="text" name="ac_email" required>
    <label>Type</label>
    <input type="text" name="ac_type" required>
    <input type="submit" name="submit">
</form>
</div>

<?php
//5. close db connection
mysqli_close($connection);

?>



