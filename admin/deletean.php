<?php
require_once('../includes/db.php');
//require_once('../includes/head.php');

if (isset($_POST['submit'])) {
    $title = $_POST['select1'];

    $query = "SELECT an_id FROM announcements WHERE an_id = '$title' ";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    $an_id = $row['an_id'];
    $query = "delete from announcements ";
    $query .= "WHERE an_id = $an_id ";
    //echo $query;
    header('Location: an_co_table.php');
    mysqli_query($connection, $query);
}

$query2 = "SELECT * from announcements ";
$result2 = mysqli_query($connection, $query2);


?>


<form role="form" action="deletean.php" method="post" style="backgroud-color: white;">

    <div class="col-lg-6" style="margin-left:25%;">
        <div class="form-group has-success">
            <label>Select to delete</label>
            <select name="select1" class="form-control">
                <option selected="selected">
                    <?php echo "<--select-->"; ?>
                </option>
                <?php
                while ($row2 = mysqli_fetch_array($result2)) {
                    echo "<option value='$row2[an_id]'>$row2[an_id]</option>";
                }
                ?>
            </select>
        </div>
        <button name="submit" class="btn">Submit</button>
    </div>
</form> 