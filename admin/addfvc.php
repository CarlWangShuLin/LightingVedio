
<?php
require_once('../includes/db.php');

//require_once('../includes/head.php');

if (isset($_POST['submit'])) {
    $vd_id = $_POST['vd_id'];
    $cl_id = $_POST['cl_id'];


    $query  = "INSERT INTO cl_vd (cl_id, vd_id) ";
    $query .= "VALUES ('$cl_id', '$vd_id') ";

    //echo $query;
    header('Location: f_table.php');
    mysqli_query($connection, $query);
}
?>
<div style="margin:auto;">
                        <form role="form" action="addfvc.php" method="post" style="backgroud-color: white;">
                            <div class="col-lg-6" style="margin-left:25%;">
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Account ID </label>
                                    <input type="number" class="form-control" name="cl_id" placeholder="<?php echo 'number' ?>">
                                </div>    
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Comment ID </label>
                                    <input type="number" class="form-control" name="vd_id" placeholder="<?php echo 'number' ?>">
                                </div>
                                <button name="submit" class="btn">Submit</button>
                            </div>
                        </form>
                        </div>
                    
<?php

mysqli_close($connection);
?> 