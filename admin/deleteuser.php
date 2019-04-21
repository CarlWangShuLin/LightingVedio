<?php
require_once('../includes/db.php');
require_once('../includes/tableheader.php');
?>

<div class="admin">
<a href="admin.php?page=table" class="btn btn-primary btn-icon-split">               
               <span class="text">Back</span>
               </a>
<?php
if (isset($_POST['submit'])) {
    $title = $_POST['select1'];

    $query = "SELECT ac_id FROM accounts WHERE ac_id = '$title' ";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    $ac_id = $row['ac_id'];
    $query = "delete from accounts ";
    $query .= "WHERE ac_id = $ac_id ";
    //echo $query;
    header('Location: admin.php?page=table');
    mysqli_query($connection, $query);
}

$query2 = "SELECT * from accounts ";
$result2 = mysqli_query($connection, $query2);


?>


<form role="form" action="deleteuser.php" method="post" style="backgroud-color: white;">

    <div class="col-lg-6" style="margin-left:25%;">
        <div class="form-group has-success">
            <label>Select number to delete</label>
            <select name="select1" class="form-control">
                <option selected="selected">
                    <?php echo "<--Account number-->"; ?>
                </option>
                <?php
                while ($row2 = mysqli_fetch_array($result2)) {
                    echo "<option value='$row2[ac_id]'>$row2[ac_id]</option>";
                }
                ?>
            </select>
        </div>
        <button name="submit" class="text">Submit</button>
    </div>
</form>
</div>
     <!-- admin end -->  