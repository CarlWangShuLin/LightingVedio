<?php
require_once('../includes/db.php');
require_once('../includes/tableheader.php');
?>

   <div class="admin">
   <a href="table.php?page=function" class="btn btn-primary btn-icon-split">               
                  <span class="text">Back</span>
                  </a>
<?php

if (isset($_POST[submit])) {
    $vd_id = $_POST['vd_id'];
    $cl_id = $_POST['cl_id'];
    
// 2. Do a query (Select all medicinal)
$query = "UPDATE cl_vd SET cl_id='$cl_id', vd_id='$vd_id' ";
$query .= "WHERE cl_id= '$cl_id'";

//echo $query;
header('Location: f_table.php');
mysqli_query($connection, $query);

}



?>
    
    <div style="margin:auto;">
                        <form role="form" action="addfvc.php" method="post" style="backgroud-color: white;">
                            <div class="col-lg-6" style="margin-left:25%;">
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Collection ID </label>
                                    <input type="number" class="form-control" name="cl_id" placeholder="<?php echo 'number' ?>">
                                </div>    
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Video ID </label>
                                    <input type="number" class="form-control" name="vd_id" placeholder="<?php echo 'number' ?>">
                                </div>
                                <button name="submit" class="text">Submit</button>
                            </div>
                        </form>
                        </div>

<!-- DataTales start -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Collection and Video function information sheet</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
           <!--//do a query -->
           <?php
        
        $query = "SELECT * ";
        $query .= "FROM cl_vd";
        
        //echo $query;
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("query is wrong");
        }
        ?>
<thead>
         <tr>
           <th>Collection ID</th>
            <th>Video ID</th>
          </tr>
    </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["cl_id"] . "</td>";
            echo "<td>" . $row["vd_id"] . "</td>";
            echo "</tr>";
        }
         ?>         
         </tbody>
      </table>
    </div>
  </div>
<!-- DataTales end -->   
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



