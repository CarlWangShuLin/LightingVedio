<?php
// make db connection
require('includes/db.php');
if (isset($_POST['submit'])) {
    if (
        empty($_POST['ac_name'])  ||
        empty($_POST['ac_password'])
    ) {
        $error = "username or password is empty";
    } else {
        // Save username & password in a variable
        $ac_name = $_POST['ac_name'];
        $ac_password = $_POST['ac_password'];

        // Prepare query
        $query  = "SELECT ac_id, ac_name, ac_password, ac_type ";
        $query .= "FROM accounts ";
        $query .= "WHERE ac_name = '$ac_name' AND 
        ac_password = '$ac_password' ";

        // Execute query
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("query is wrong");
        }

        $row = mysqli_fetch_array($result);


        // Check how many answers did we get
        $numrows = mysqli_num_rows($result);
        if ($numrows == 1) {
            // Start to use sessions
            session_start();

            //Create session variable
            $_SESSION['login_user'] = $ac_name;
            $_SESSION['login_level'] = $row['ac_type'];
            $_SESSION['login_id'] = $row['ac_id'];

            if ($_SESSION['login_level'] == '1') {
                    header('Location: index/index.php');
                }
            if ($_SESSION['login_level'] == '2') {
                    header('Location: admin/admin.php');
                }
        } else {
            $failed_1 = "Login failed";
            $failed_2 = "Provided username and password do not match or are invalid.";
        }

        // free results
        mysqli_free_result($result);

        // close
        mysqli_close($connection);
    }
}
?>
<div style="text-align:right;"><a href="log/signup.php">No account? Have a signup here</a></div>
<div style="text-align: center; margin-top: 100px;"><img class="lvlogo" src="images/lv_logo_1.png"><img style="width: 200px; margin-left: 10px;" src="images/lv_logo_2.png"></div>

<div class="container" style="width:400px;">
    <div class="card card-login mx-auto mt-5">

        <div class="card-header" style="font-weight: 600;">
            <p style="font-size: 26px;">Please login</p>
            <p style="color: red; font-size: 13px; font-family: calibri;"><?php
                                                                            if (isset($_POST['submit'])) {
                                                                                echo $failed_1;
                                                                            }
                                                                            ?></p>
            <p style="color: red; font-size: 13px; font-family: calibri;"><?php
                                                                            if (isset($_POST['submit'])) {
                                                                                echo $failed_2;
                                                                            }
                                                                            ?></p>
        </div>
        <div class="card-body">

            <form action="index.php" method="POST">

                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" style="margin-top: 20px;" name="ac_name" class="form-control" placeholder="username">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" style="margin-top: 20px;" name="ac_password" class="form-control" placeholder="password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="checkbox">
                    </div>
                </div>
                <input class="btn btn-warning btn-icon-split" type="submit" name="submit" value="login" style="width: 328px;">
            </form>

            <div class="text-center">
            </div>
        </div>
    </div>
</div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Lighting Video</title>
    <!--// Stylesheets //-->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/ddsmoothmenu.css" rel="stylesheet" type="text/css" />
    <link href="css/scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="css/scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="css/login.css" rel="stylesheet">
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!--// Javascript //-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/ddsmoothmenu.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <script type="text/javascript" src="js/contentslider.js"></script>
    <script type="text/javascript" src="js/jquery.1.4.2.js"></script>
    <script type="text/javascript" src="js/jquery.lint.js"></script>
    <script type="text/javascript" src="js/jquery.scroll.js"></script>
    <script type="text/javascript" src="js/scroll.js"></script>
    <script type="text/javascript" src="js/jquery.idTabs.min.js"></script>
    <script type="text/javascript" src="js/switch.js"></script>
    <script type="text/javascript" src="js/tabs.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon.js"></script>
    <script type="text/javascript" src="js/font.js"></script>
    <!--[if lte IE 7]><style>.comments .commentlinks{margin-left:250px;}
.comments .singlebtn{margin-left:380px;}
.comments ul li:hover .commentlinks{display:inline-block;}
.comments ul li.level2:hover .commentlinks{margin-left:210px;}
.comments ul li.level2:hover .singlebtn{margin-left:340px;}
</style><![endif]-->
    <!-- that's IT-->
</head>

<body>