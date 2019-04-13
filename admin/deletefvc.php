<?php
require_once('../includes/db.php');
//require_once('../includes/head.php');

if (isset($_POST['submit'])) {
    $title = $_POST['select1'];

    $query = "SELECT vd_id FROM cl_vd WHERE vd_id = '$title' ";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    $vd_id = $row['vd_id'];
    $query = "delete from cl_vd ";
    $query .= "WHERE vd_id = $vd_id ";
    //echo $query;
    header('Location: f_table.php');
    mysqli_query($connection, $query);
}

$query2 = "SELECT * from cl_vd ";
$result2 = mysqli_query($connection, $query2);


?>


<form role="form" action="deletefvc.php" method="post" style="backgroud-color: white;">

    <div class="col-lg-6" style="margin-left:25%;">
        <div class="form-group has-success">
            <label>Select to delete</label>
            <select name="select1" class="form-control">
                <option selected="selected">
                    <?php echo "<--select-->"; ?>
                </option>
                <?php
                while ($row2 = mysqli_fetch_array($result2)) {
                    echo "<option value='$row2[vd_id]'>$row2[vd_id]</option>";
                }
                ?>
            </select>
        </div>
        <button name="submit" class="btn">Submit</button>
    </div>
</form> 