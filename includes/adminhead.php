<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
require('../includes/admin_logincheck.php');
require('../includes/db.php');
?>
<html>
<body>
<span class="smalllines">&nbsp;</span>
    <!-- Wrapper -->
    <div id="wrapper_sec">
        <!-- Top Section -->
        <div class="top_sec">
            <!-- Top Section Left Links -->
            <div class="toplinks">
        	<ul style="margin-top: 0px;">
                <li><a href="../log/login.php">Login</a></li>
                <li><a href="../log/logout.php">Log out</a></li>
                <li><a href="../log/signup.php">Signup</a></li>
            </ul>
        </div>
            <!-- Top Section right Links -->
           
        </div>
        <div class="clear"></div>
        <!-- Header -->
        <div id="masthead">
            <!-- Logo -->
            <div class="logo">
        	<a href="index.php"><img src="../images/lv_logo_1.png" style="width: 25%; margin-top: 10px;">
            <img src="../images/lv_logo_2.png" style="width: 70%; margin-bottom: 4px;"></a>
        </div>
            <!-- Navigation -->
            <div class="navigation">
                <div id="smoothmenu1" class="ddsmoothmenu">
                    <ul>
                        <li><a href="admin.php" class="staticlinks">Chart</a></li>
                        <li><a href="admin.php?page=table" class="staticlinks" >Table list</a>
                            <ul>
                                <li><a href="admin.php?page=blog_video">Blog video table</a></li>
                                <li><a href="admin.php?page=an_co">an and co table</a></li>
                                <li><a href="admin.php?page=function">Function table</a></li>
                            </ul>
                        </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
            
        </div>
        <div class="clear"></div>

<!-- Table JS and CSS --> 
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../css/headercss.css" rel="stylesheet">
    <link href="../css/button.css" rel="stylesheet">
    <link href="../vendor/tables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../vendor/headerfont/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="../vendor/headerjquery/jquery.min.js"></script>
    <script src="../vendor/headerbootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/tables/jquery.dataTables.min.js"></script>
    <script src="../vendor/tables/dataTables.bootstrap4.min.js"></script>
    <script src="../js/demo/datatables-demo.js"></script>
    <script src="../js/headerjs.js"></script>

        </body>
        </html>