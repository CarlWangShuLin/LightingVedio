<?php
require_once('../includes/db.php');
//require_once('../includes/head.php');

if (isset($_POST['submit'])) {
    $title = $_POST['select1'];

    $query = "SELECT cl_id FROM collection WHERE cl_id = '$title' ";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    $cl_id = $row['cl_id'];
    $query = "delete from collection ";
    $query .= "WHERE cl_id = $cl_id ";
    //echo $query;
    header('Location: an_co_table.php');
    mysqli_query($connection, $query);
}

$query2 = "SELECT * from collection ";
$result2 = mysqli_query($connection, $query2);


?>


<form role="form" action="deletecl.php" method="post" style="backgroud-color: white;">

    <div class="col-lg-6" style="margin-left:25%;">
        <div class="form-group has-success">
            <label>Select to delete</label>
            <select name="select1" class="form-control">
                <option selected="selected">
                    <?php echo "<--select-->"; ?>
                </option>
                <?php
                while ($row2 = mysqli_fetch_array($result2)) {
                    echo "<option value='$row2[cl_id]'>$row2[cl_id]</option>";
                }
                ?>
            </select>
        </div>
        <button name="submit" class="btn">Submit</button>
    </div>
</form> 