<?php
require_once('../includes/db.php');
require_once('../includes/head.php');
require_once('../includes/adminhead.php');
?>


<html lang="en">
<link href="css/button.css" rel="stylesheet">
<head>

<title> Table page </title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

</head>

<body>

        <!-- Content Section -->
        <div id="content_sec">
<!-- DataTales start -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Accounts and Comments function information sheet</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
        <!--//do a query -->
        <?php
        
        $query = "SELECT * ";
        $query .= "FROM ac_cm";
        
        //echo $query;
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("query is wrong");
        }
        ?>

<thead>
         <tr>
           <th>Account ID</th>
            <th>Comment ID</th>
          </tr>
    </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["ac_id"] . "</td>";
            echo "<td>" . $row["cm_id"] . "</td>";
            echo "</tr>";
        }
         ?>         
         </tbody>   
      </table>
    </div>
  </div>
<!-- DataTales end -->
<!-- button start -->
<div class="button2">             
                  <a href="addfac.php" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                      </span>
                  <span class="text">Add</span>
                  </a>

                  <a href="updatefac.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                      </span>
                  <span class="text">Update</span>
                  </a>

                  <a href="deletefac.php" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                      </span>
                  <span class="text">Delete</span>
                  </a>
                </div>
<!-- button end -->
     
<!-- DataTales start -->
<div class="table">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Collection and Video function information sheet</h6>
  </div>
                    <div class="panel-body">            
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
   
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
</div>
<!-- DataTales end -->
<!-- button start -->
<div class="button2">             
                  <a href="addfvc.php" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                      </span>
                  <span class="text">Add</span>
                  </a>

                  <a href="updatefvc.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                      </span>
                  <span class="text">Update</span>
                  </a>

                  <a href="deletefvc.php" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                      </span>
                  <span class="text">Delete</span>
                  </a>
                </div>
<!-- button end -->
</div>
<!-- conten end -->

  <script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>