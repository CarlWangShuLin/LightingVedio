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
</style><![endif]--><!-- that's IT-->
</head>
<body>
<?php
// make db connection
require('../includes/db.php');
?>

<?php
$ac_name = $_POST[ac_name];
$ac_password = $_POST[ac_password];
$ac_age = $_POST[ac_age];
$ac_phone = $_POST[ac_phone];
$ac_email = $_POST[ac_email];
$ac_type = 1;

$query  = "INSERT INTO accounts (ac_name, ac_password, ac_age, ac_phone, ac_email, ac_type ) ";
$query .= "VALUES ('$ac_name', '$ac_password', '$ac_age', '$ac_phone', '$ac_email', '$ac_type') ";
mysqli_query($connection, $query);
?>
<div style="text-align:right;"><a href="login.php">Go back to login</a></div>
        <div style="text-align: center; margin-top: 20px;"><img class="lvlogo" src="images/lv_logo_1.png"><img style="width: 200px; margin-left: 10px;" src="images/lv_logo_2.png"></div>
    
        <div class="container" style="width:400px;">
              <div class="card card-login mx-auto mt-5">
                <div class="card-header" style="font-weight: 600;">
                    <p style="font-size: 26px;">Please fill the blank</p>
                    <p style="color: red; font-size: 13px; font-family: calibri;"><?php echo $failed_1; ?></p>
                    <p style="color: red; font-size: 13px; font-family: calibri;"><?php echo $failed_2; ?></p>
                </div>
<div class="card-body">
<form action="signup.php" method="post">
    <div class="form-group">
        <div class="form-label-group">
            <input class="form-control" type="text" name="ac_name" placeholder="username" required>
        </div>
    </div>
    <div class="form-group">
        <div class="form-label-group">
            <input class="form-control" type="password" name="ac_password" id="pw1" placeholder="password" required>
        </div>
    </div>
    <div class="form-group">
        <div class="form-label-group">
            <input class="form-control" type="password" name="ac_password" id="pw2" placeholder="please confirm the password" onkeyup="validate()"><span id="tishi"></span>
            </div>
    </div>
    <div class="form-group">
        <div class="form-label-group">
            <input class="form-control" type="number" name="ac_age" placeholder="your age" required>
        </div>
    </div>   
    <div class="form-group">
        <div class="form-label-group">
            <input class="form-control" type="number" name="ac_phone" placeholder="phone number"required>
        </div>
    </div>
    <div class="form-group">    
        <div class="form-label-group">
            <input class="form-control" type="email" name="ac_email" placeholder="email" required>
        </div>
    </div> 
    <div class="form-group">   
        <div class="form-label-group">
            <input class="btn btn-success btn-icon-split" id="submit" type="submit" name="submit" value="Sign up" style="width: 328px;">
</form>
<script>
function validate() {
var pw1 = document.getElementById("pw1").value;
var pw2 = document.getElementById("pw2").value;
if(pw1 == pw2) {
document.getElementById("tishi").innerHTML="<font color='green'>The passwords are matched!</font>";
document.getElementById("submit").disabled = false;
}
else {
document.getElementById("tishi").innerHTML="<font color='red'>The passwords are not matched, please try again</font>";
document.getElementById("submit").disabled = true;
}
}
</script>
</div>
<?php
if($_POST[submit]){
    echo '<script>
    alert("Signup Completed!");
    </script>';
}

?>
<?php            
mysqli_close($connection);
?>