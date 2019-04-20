<?php
require_once('../includes/db.php');
require_once('../includes/head.php');
require_once('../includes/adminhead.php');
?>

   <div class="admin">
   <a href="admin.php?page=blog_video" class="btn btn-primary btn-icon-split">               
                  <span class="text">Back</span>
                  </a>
<?php

if (isset($_POST[submit])) {
    $vd_id = $_POST['vd_id'];
    $vd_name = $_POST['vd_name'];
    $vd_classification = $_POST['vd_classification'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE videos SET vd_id='$vd_id', vd_name='$vd_name', vd_classification='$vd_classification' ";
$query .= "WHERE vd_id= '$vd_id'";

//echo $query;
header('Location: admin.php?page=blog_video');
mysqli_query($connection, $query);

}



?>
    
    <div style="margin:auto;">
  <form role="form" action="updatevd.php" method="post" style="backgroud-color: white;">
<div class="col-lg-6" style="margin-left:25%;">
<div class="form-group has-success" >
        <label class="control-label" for="inputSuccess"> Video id </label>
        <input type="number" class="form-control" name="vd_id" placeholder="<?php echo 'number' ?>" required>
        </div>
<div class="form-group has-success">
        <label class="control-label" for="inputSuccess"> Video name </label>
        <input type="text" class="form-control" name="vd_name" placeholder="<?php echo 'name' ?>" required>
        </div>
<div class="form-group has-success">
        <label class="control-label" for="inputSuccess"> Video classification </label>
        <input type="text" class="form-control" name="vd_classification" placeholder="<?php echo 'classification' ?>" required>
        </div>
<button name="submit" class="text">Submit</button>
         </div>
          </form>
          </div>

    <!-- DataTales start -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Video information sheet</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
      <!--//do a query -->
      <?php
        
        $query = "SELECT * ";
        $query .= "FROM videos";
        
        //echo $query;
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("query is wrong");
        }
        ?>
<thead>
         <tr>
           <th>Video ID</th>
            <th>Video name</th>
            <th>Video classification</th>
          </tr>
    </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["vd_id"] . "</td>";
            echo "<td>" . $row["vd_name"] . "</td>";
            echo "<td>" . $row["vd_classification"] . "</td>";
            echo "</tr>";
        }
         ?>         
         </tbody>    
      </table>
    </div>
  </div>
<!-- DataTales end -->      
</div>
     <!-- admin end -->     

<?php
//5. close db connection
mysqli_close($connection);

?>



