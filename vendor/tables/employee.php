<?php
// make db
require_once('dbdatabase.php');
require_once('header.php');
?>


<html lang="en">
<link href="css/button.css" rel="stylesheet">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/headerfont/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/headercss.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/tables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       

        <!--//do a query -->
        <?php
        
        $query = "SELECT id, name, position, time, age, phonenumber ";
        $query .= "FROM metro_employee";
        
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
            <th>Position</th>
            <th>Start time</th>
            <th>Age</th>
            <th>Phone Number</th>
          </tr>
    </thead>
      <tbody>
      <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
                    </tr>
         </tbody>   
      </table>
    </div>
  </div>
</div>
<div class="button2">             
                  <a href="add/add_employee.php#employee" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                      </span>
                  <span class="text">Add</span>
                  </a>

                  <a href="update_employee.php#up_employee" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-flag"></i>
                      </span>
                  <span class="text">Update</span>
                  </a>

                  <a href="delete/delete_employee.php" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                      </span>
                  <span class="text">Delete</span>
                  </a>
                </div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

 <!-- Bootstrap core JavaScript-->
 <script src="vendor/headerjquery/jquery.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/headerjs.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/tables/jquery.dataTables.min.js"></script>
  <script src="vendor/tables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>




</body>

</html>