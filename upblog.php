<?php
require_once('includes/db.php');




if (isset($_POST['submit'])) {
    $id = $_POST['bg_id'];
    $title = $_POST['bg_title'];
    $contents = $_POST['bg_contents'];
    $date = $_POST['bg_date'];

    // 2. Do a query (update information)
    $query = "UPDATE blogs SET bg_title = '$title' , bg_contents = '$contents' , bg_date = '$date' ";
    $query .= "WHERE bg_id = $id ";
    //echo $query;
    header('Location: blogs.php');
    mysqli_query($connection, $query);
}


$bg_id = $_GET['bg_id'];
$query = "SELECT * FROM blogs ";
$query .= "WHERE bg_id = '$bg_id' ";
$result = mysqli_query($connection, $query);
//if (!$result) {
//printf("Error: %s\n", mysqli_error($connection));
//exit();}
$row = mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Updata Page <small>You can change the information of bolg here</small>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       Update Blog Information
                    </div>
                    <div class="panel-body">
                        <form role="form" action="upblog.php" method="post" style="backgroud-color: white;">
                            <div class="col-lg-6" style="margin-left:25%;" >
                                <input type="hidden" name="bg_id" value="<?php echo $bg_id; ?>">

                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess" style="color: black;"> title </label>
                                    <textarea  rows="5" cols="100" style="font-size: 20px;" class="form-control" name="bg_title" ><?php echo $row['bg_title']; ?></textarea>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess" style="color: black;"> date </label>
                                    <input type="date" class="form-control" name="bg_date" value="<?php echo $row['bg_date']; ?>">
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess" style="color: black;"> contents </label>
                                    <textarea  rows="5" cols="100" style="font-size: 20px;" class="form-control" name="bg_contents" ><?php echo $row['bg_contents']; ?></textarea>
                                </div>
                                
                                <button name="submit" class="btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
// 5. close db connection
mysqli_close($connection);
?> 