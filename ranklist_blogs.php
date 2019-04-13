<?php
require('includes/db.php');
require('includes/logincheck.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rank Lists</title>
<!--// Stylesheets //-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/ddsmoothmenu.css" rel="stylesheet" type="text/css" />
<link href="css/scrollbar.css" rel="stylesheet" type="text/css" />
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
</head>
<body class="bg2">
<span class="smalllines">&nbsp;</span>
<!-- Wrapper -->
<div id="wrapper_sec">
	<!-- Top Section -->
    <div class="top_sec">
    	<!-- Top Section Left Links -->
        <?php
        require("includes/header_link.php");
        ?>
        <!-- Top Section right Links -->
        <div class="links_icons">
        	<ul>
                <li class="last lang">Language: <a href="#"><img src="images/flag1.gif" alt="" /></a></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <!-- Header -->
    <div id="masthead">
    	<!-- Logo -->
        <div class="logo">
        <a href="index.php"><img src="images/lv_logo_1.png" style="width: 25%; margin-top: 10px;">
            <img src="images/lv_logo_2.png" style="width: 70%; margin-bottom: 4px;"></a>
        </div>
        <!-- Navigation -->
        <?php
        require("includes/menu.php");
        ?>
        <!-- Search -->
        <div class="search">
        	<input type="text" value="Enter keyword to search" id="searchBox" name="s" onblur="if(this.value == '') { this.value = 'Enter keyword to search'; }" onfocus="if(this.value == 'Enter keyword to search') { this.value = ''; }" class="bar" />
            <a href="#" class="go">&nbsp;</a>
        </div>
    </div>
    <div class="clear"></div>
    <!-- Content Section -->
    <div id="content_sec">
    	<!-- Bread Crumb -->
        <div id="crumb">
        	<h5>You are here:</h5>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">Rank lists</a></li>
            	<li class="last"><a href="ranklist_videos.html">Rank list of blogs</a></li>
            </ul>
        </div>
    	<!-- Column 1 -->
        <div class="col1">
            <div class="news">
            	<h2 class="heading">Rank list of blogs</h2>
                <ul class="newslisting">
                	<li>
                    	<div class="date">
                        	<p>NO</p>
                            <h1>1</h1>
                        </div>
                        <div class="desc">
                        	<span class="featured">Featured</span>
                        	<h4><a href="#" class="colr">Curabitur dolor sapien Sed elit</a></h4>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibuluvolutpat eget
dapibus ac, lectus. Curabitur dolor sapien Sed elit. Nulla sem risus, vestibuluvolutpat eget dapibus ac, lectu
curabitur dolor sapien... <a href="#">Read More</a><a href="#" class="catbtn">Entertainment</a>
                            </p>
                        </div>
                    </li>
                    <li>
                    	<div class="date">
                        	<p>NO</p>
                            <h1>2</h1>
                        </div>
                        <div class="desc">
                        	<h4><a href="#" class="colr">Vestibuluvolutpat eget dapibus ac</a></h4>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibuluvolutpat eget
dapibus ac, lectus. Curabitur dolor sapien Sed elit. Nulla sem risus, vestibuluvolutpat eget dapibus ac, lectu
curabitur dolor sapien... <a href="#">Read More</a><a href="#" class="catbtn">Entertainment</a>
                            </p>
                        </div>
                    </li>
                    <li>
                    	<div class="date">
                        	<p>NO</p>
                            <h1>3</h1>
                        </div>
                        <div class="desc">
                        	<h4><a href="#" class="colr">Lorem ipsum dolor sit amet</a></h4>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibuluvolutpat eget
dapibus ac, lectus. Curabitur dolor sapien Sed elit. Nulla sem risus, vestibuluvolutpat eget dapibus ac, lectu
curabitur dolor sapien... <a href="#">Read More</a><a href="#" class="catbtn">Entertainment</a>
                            </p>
                        </div>
                    </li>
                    <li>
                    	<div class="date">
                        	<p>NO</p>
                            <h1>4</h1>
                        </div>
                        <div class="desc">
                        	<h4><a href="#" class="colr">Nulla sem risus</a></h4>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibuluvolutpat eget
dapibus ac, lectus. Curabitur dolor sapien Sed elit. Nulla sem risus, vestibuluvolutpat eget dapibus ac, lectu
curabitur dolor sapien... <a href="#">Read More</a><a href="#" class="catbtn">Entertainment</a>
                            </p>
                        </div>
                    </li>
                    <li>
                    	<div class="date">
                        	<p>MAY 2011</p>
                            <h1>21</h1>
                        </div>
                        <div class="desc">
                        	<h4><a href="#" class="colr">Consectetuer adipiscing elit</a></h4>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibuluvolutpat eget
dapibus ac, lectus. Curabitur dolor sapien Sed elit. Nulla sem risus, vestibuluvolutpat eget dapibus ac, lectu
curabitur dolor sapien... <a href="#">Read More</a><a href="#" class="catbtn">Entertainment</a>
                            </p>
                        </div>
                    </li>
                    <li>
                    	<div class="date">
                        	<p>MAY 2011</p>
                            <h1>20</h1>
                        </div>
                        <div class="desc">
                        	<h4><a href="#" class="colr">Nulla sem risus, vestibuluvolutpat eget</a></h4>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibuluvolutpat eget
dapibus ac, lectus. Curabitur dolor sapien Sed elit. Nulla sem risus, vestibuluvolutpat eget dapibus ac, lectu
curabitur dolor sapien... <a href="#">Read More</a><a href="#" class="catbtn">Entertainment</a>
                            </p>
                        </div>
                    </li>
                    <li>
                    	<div class="date">
                        	<p>MAY 2011</p>
                            <h1>20</h1>
                        </div>
                        <div class="desc">
                        	<h4><a href="#" class="colr">Curabitur dolor sapien Sed elit</a></h4>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibuluvolutpat eget
dapibus ac, lectus. Curabitur dolor sapien Sed elit. Nulla sem risus, vestibuluvolutpat eget dapibus ac, lectu
curabitur dolor sapien... <a href="#">Read More</a><a href="#" class="catbtn">Entertainment</a>
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="clear"></div>
                <!-- Pagination -->
                <div class="paginations">
                	<h5 class="pagehead">PAGE</h5>
                    <ul>
                    	<li class="leftpage"><a href="#">&nbsp;</a></li>
                        <li class="pages"><a href="#">1</a></li>
                        <li class="pages"><a href="#">2</a></li>
                        <li class="pages"><a href="#">3</a></li>
                        <li class="pages"><a href="#">4</a></li>
                        <li class="pages"><a href="#" class="selected">5</a></li>
                        <li class="pages"><a href="#">6</a></li>
                        <li class="pages"><a href="#">7</a></li>
                        <li class="pages"><a href="#">8</a></li>
                        <li class="pages"><a href="#">9</a></li>
                        <li class="pages"><a href="#">10</a></li>
                        <li class="dots">...</li>
                        <li class="pages"><a href="#">103</a></li>
                        <li class="pages"><a href="#">104</a></li>
                        <li class="nextpage"><a href="#">&nbsp;</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <!-- Column 2 -->    </div>
</div>
<div class="clear"></div>
<!-- Footer -->

<div class="clear"></div>
<div id="copyrights">
	<div class="inner">
    	<p>Copyright © 2019 Group 2. All rights reserved.</p>
        
    </div>
</div>

</body>
</html>
