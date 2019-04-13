<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
require_once('../includes/db.php');
require_once('../includes/head.php');
?>


<html lang="en">
<link href="css/button.css" rel="stylesheet">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Custom fonts for this template -->
  <link href="vendor/headerfont/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/headercss.css" rel="stylesheet">
  <link href="css/button.css" rel="stylesheet">
  
  
  <!-- Custom styles for this page -->
  <link href="vendor/tables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>
<span class="smalllines">&nbsp;</span>
    <!-- Wrapper -->
    <div id="wrapper_sec">
        <!-- Top Section -->
        <div class="top_sec">
            <!-- Top Section Left Links -->
            <div class="toplinks">
                <ul>
                    <li class="first"><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Signup</a></li>
                    <li><a href="account.php">My account</a></li>
                </ul>
            </div>
            <!-- Top Section right Links -->
           
        </div>
        <div class="clear"></div>
        <!-- Header -->
        <div id="masthead">
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="../images/logo.png" style="width:100%;"></a>
            </div>
            <!-- Navigation -->
            <div class="navigation">
                <div id="smoothmenu1" class="ddsmoothmenu">
                    <ul>
                        <li><a href="chart.php" class="staticlinks">Chart</a></li>
                        <li><a href="table.php" class="staticlinks">tables</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- Search -->
        </div>
        <div class="clear"></div>
        <!-- Content Section -->
        <div id="content_sec">



<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">User information sheet</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    
        <!--//do a query -->
        <?php
        
        $query = "SELECT * ";
        $query .= "FROM accounts";
        
        //echo $query;
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("query is wrong");
        }
        ?>

<thead>
         <tr>
           <th>User ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Email</th>
          </tr>
    </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["ac_id"] . "</td>";
            echo "<td>" . $row["ac_name"] . "</td>";
            echo "<td>" . $row["ac_password"] . "</td>";
            echo "<td>" . $row["ac_age"] . "</td>";
            echo "<td>" . $row["ac_phone"] . "</td>";
            echo "<td>" . $row["ac_email"] . "</td>";
            echo "</tr>";
        }
         ?>         
         </tbody>   
      </table>
    </div>
  </div>

<div class="button2">             
                  <a href="adduser.php" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                      </span>
                  <span class="text">Add</span>
                  </a>

                  <a href="updateuser.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                      </span>
                  <span class="text">Update</span>
                  </a>

                  <a href="deleteuser.php" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                      </span>
                  <span class="text">Delete</span>
                  </a>
                </div>
</div>
<!-- /.container-fluid -->



       
<!-- /.row -->
<div class="table">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">User information sheet</h6>
  </div>
                    <div class="panel-body">            
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
   
         <!--//do a query -->
         <?php
        
        $query = "SELECT * ";
        $query .= "FROM accounts";
        
        //echo $query;
        
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("query is wrong");
        }
        ?>

<thead>
         <tr>
           <th>User ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Email</th>
          </tr>
    </thead>
      <tbody>
      <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row["ac_id"] . "</td>";
            echo "<td>" . $row["ac_name"] . "</td>";
            echo "<td>" . $row["ac_password"] . "</td>";
            echo "<td>" . $row["ac_age"] . "</td>";
            echo "<td>" . $row["ac_phone"] . "</td>";
            echo "<td>" . $row["ac_email"] . "</td>";
            echo "</tr>";
        }
         ?>         
         </tbody>   
      </table>
    </div>
  </div>
</div>

</div>
<!-- End of Main Content -->
 <!-- Bootstrap core JavaScript-->
 <script src="vendor/headerjquery/jquery.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/headerjs.js"></script>
     
  <script src="vendor/headerbootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/tables/jquery.dataTables.min.js"></script>
  <script src="vendor/tables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>