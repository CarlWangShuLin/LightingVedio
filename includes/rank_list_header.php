<?php
ini_set("error_reporting", "E_ALL & ~E_NOTICE");
require('logincheck.php');
require('db.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Lighting Video</title>
    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/lv_table.css" rel="stylesheet">

    <!--// Stylesheets //-->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <link href="../css/ddsmoothmenu.css" rel="stylesheet" type="text/css" />
    <link href="../css/scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="../css/jason_lv.css" rel="stylesheet" type="text/css" />
    <link href="../css/yema.css" rel="stylesheet" type="text/css" />
    <link href="../css/button.css" rel="stylesheet" type="text/css" />
    <!--// Javascript //-->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="../js/menu.js"></script>
    <script type="text/javascript" src="../js/contentslider.js"></script>
    <script type="text/javascript" src="../js/jquery.1.4.2.js"></script>
    <script type="text/javascript" src="../js/jquery.lint.js"></script>
    <script type="text/javascript" src="../js/jquery.scroll.js"></script>
    <script type="text/javascript" src="../js/scroll.js"></script>
    <script type="text/javascript" src="../js/jquery.idTabs.min.js"></script>
    <script type="text/javascript" src="../js/switch.js"></script>
    <script type="text/javascript" src="../js/tabs.js"></script>
    <script type="text/javascript" src="../js/cufon-yui.js"></script>
    <script type="text/javascript" src="../js/cufon.js"></script>
    <script type="text/javascript" src="../js/font.js"></script>
    <!--[if lte IE 7]><style>.comments .commentlinks{margin-left:250px;}
.comments .singlebtn{margin-left:380px;}
.comments ul li:hover .commentlinks{display:inline-block;}
.comments ul li.level2:hover .commentlinks{margin-left:210px;}
.comments ul li.level2:hover .singlebtn{margin-left:340px;}
</style><![endif]-->
    <!-- that's IT-->
</head>

<body>
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
                    <li><a href="../myaccount/account.php">My account</a></li>
                    <li><a href="../payment/payment.php">VIP </a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <!-- Header -->
        <div id="masthead">
            <!-- Logo -->
            <div class="logo">
                <a href="../index/index.php"><img src="../images/lv_logo_1.png" style="width: 25%; margin-top: 10px;">
                    <img src="../images/lv_logo_2.png" style="width: 70%; margin-bottom: 4px;"></a>
            </div>
            <!-- Navigation -->
            <div class="navigation">
                <div id="smoothmenu1" class="ddsmoothmenu">
                    <ul>
                        <li><a href="../index/index.php" class="staticlinks">Home</a></li>
                        <li><a href="../video/videos.php" class="staticlinks">Videos</a></li>
                        <li><a href="../blog/blogs.php">Blogs</a>
                        </li>
                        <li><a href="../rank_list/ranklist.php" class="staticlinks">Rank lists</a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>