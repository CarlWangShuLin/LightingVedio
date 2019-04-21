<?php
require_once('../includes/db.php');
require_once('../includes/tableheader.php');
?>

   <div class="admin">
   <a href="admin.php?page=blog_video" class="btn btn-primary btn-icon-split">               
                  <span class="text">Back</span>
                  </a>
<?php

if (isset($_POST['submit'])) {
    $bg_id = $_POST['select1'];

    $query = "SELECT bg_id FROM blogs WHERE bg_id = '$bg_id' ";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    $bg_id = $row['bg_id'];
    $query = "delete from blogs ";
    $query .= "WHERE bg_id = $bg_id ";
    //echo $query;
    header('Location: admin.php?page=blog_video');
    mysqli_query($connection, $query);
}

$query2 = "SELECT * from blogs ";
$result2 = mysqli_query($connection, $query2);


?>


<form role="form" action="deletebg.php" method="post" style="backgroud-color: white;">

    <div class="col-lg-6" style="margin-left:25%;">
        <div class="form-group has-success">
            <label>Select number to delete</label>
            <select name="select1" class="form-control">
                <option selected="selected">
                    <?php echo "<--Blog number-->"; ?>
                </option>
                <?php
                while ($row2 = mysqli_fetch_array($result2)) {
                    echo "<option value='$row2[bg_id]'>$row2[bg_id]</option>";
                }
                ?>
            </select>
        </div>
        <button name="submit" class="text">Submit</button>
    </div>
</form> 
</div>
     <!-- admin end --> 