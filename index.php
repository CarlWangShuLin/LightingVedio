<?php
require('includes/logincheck.php');
require('includes/db.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lighting Video</title>
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
</style><![endif]--><!-- that's IT-->
</head>
<body>
<span class="biglines">&nbsp;</span>
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
    <!-- Banner -->
    <div id="banner">
    	<div id="slider2" class="leftsecbanner">
            <div class="contentdiv">
                <object type="application/x-shockwave-flash" style="width:660px; height:348px;" data="mp4/vettel.mp4">
                	<param name="movie" value="http://www.cssmoban.com/" />
                	<param value="application/x-shockwave-flash" name="type" /> 
                    <param value="true" name="allowfullscreen" /> 
                    <param value="always" name="allowscriptaccess" /> 
                    <param value="opaque" name="wmode" />
                </object>
            </div>
        </div>
        <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >Lighting Video</a></div>
        <div id="paginate-slider2">
        	<div class="usual">
                <ul class="idTabs">
                  <li><a href="#idTab1" class="selected"><span>New</span></a></li>
                  <li><a href="#idTab2"><span>Being Watched</span></a></li>
                  <li><a href="#idTab3"><span>Top Rated</span></a></li>
                </ul>
                <div id="idTab1" class="tabssection">
                    <div class="css-scrollbar simple">
                    	<a href="mp4/vettel.mp4" class="toc">
                        	<span class="thumb"><img src="images/video_small6.gif" alt="" /></span>
                            <span class="desc">
                            	<span class="title">2018 F1 German Grand Prix Highlights</span>
                                <span class="time">00:07</span>
                                <span class="channel">Sports</span>
                            </span>
                        </a>
                    </div>
                </div> 
          	</div>
			<div class="clear"></div>
        </div>
        <script type="text/javascript" src="js/banner.js"></script>
    </div>
    <div class="clear"></div>
    <!-- Content Section -->
    <div id="content_sec">
    	<!-- Column 1 -->
        <div class="col1">
        	<!-- Featured Playlist -->
        	<div class="featured_playlist">
            	<h3 class="heading">Featured Playlist</h3>
                <ul>
                	<li>
                    	<a href="#" class="channellogo"><img src="images/channel_icon1.gif" alt="" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="#" class="colr">Zee Classic</a>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="channellogo"><img src="images/channel_icon2.gif" alt="" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="#" class="colr">HBO Network</a>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="channellogo"><img src="images/channel_icon3.gif" alt="" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="#" class="colr">Zee Cenema</a>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="channellogo"><img src="images/channel_icon4.gif" alt="" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="#" class="colr">9xm</a>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="channellogo"><img src="images/channel_icon5.gif" alt="" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="#" class="colr">ESPN</a>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="channellogo"><img src="images/channel_icon6.gif" alt="" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="#" class="colr">Rajya Sabha</a>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="channellogo"><img src="images/channel_icon7.gif" alt="" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="#" class="colr">CNN News</a>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="channellogo"><img src="images/channel_icon8.gif" alt="" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="#" class="colr">Music India</a>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="channellogo"><img src="images/channel_icon9.gif" alt="" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="#" class="colr">Channel [V]</a>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="channellogo"><img src="images/channel_icon10.gif" alt="" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="#" class="colr">AXN Network</a>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="channellogo"><img src="images/channel_icon11.gif" alt="" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="#" class="colr">MTV India</a>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="channellogo"><img src="images/channel_icon12.gif" alt="" /></a>
                        <div class="desc">
                        	<h6>from</h6>
                            <a href="#" class="colr">Sony PIX</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Recent Videos -->
            <div class="recent_videos">
            	<div class="recent_head">
                	<h3>Recent Videos</h3>
                    <a href="#" class="viewall">(View All)</a>
                    <div class="recent_buttons">
                    	<ul>
                        	<li class="gridbutn"><a href="#" class="switch_thumb">&nbsp;</a></li>
                            <li>
                            	<a href="#" class="previousbtn">&nbsp;</a>
                                <a href="#" class="nextbtn">&nbsp;</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <ul class="display">
                	<li>
                    	<a href="#" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video1.gif" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="detail.html" class="colr">Lorem ipsum dolor sit amet, consectetuer</a></h4>
                            <div class="clear"></div>
                            <div class="yourhere">
                            	<p>You are here:</p>
                                <a href="#">Videos</a>
                                <a href="#">Fashion</a>
                                <a href="#" class="last">Kid</a>
                            </div>
                            <div class="clear"></div>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulu volutpat eget, dapibus ac, lectus. Curabitur dolor sapien, hendrerit non,
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                            	<p class="postbytxt">By: <a href="#">RayWilliams</a></p>
                                <p class="views"><span class="left">Views: </span><a href="#">800</a></p>
                            </div>
                            <div class="right">
                            	<p class="time">1:50</p>
                            	<p class="date"><span>3 days ago</span></p>
                                <div class="rating">
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="greyscal">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="smallsec">
                        	<h6><a href="detail.html" class="colr">Lorem ipsum dolor sit amet</a></h6>
                            <div class="clear"></div>
                            <p class="time">1:50</p>
                            <p class="date">3 days ago</p>
                            <div class="clear"></div>
                            <div class="rating">
                            	<a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="greyscal">&nbsp;</a>
                                <p class="views">800 Views</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video2.gif" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="detail.html" class="colr">Lorem ipsum dolor sit amet, consectetuer</a></h4>
                            <div class="clear"></div>
                            <div class="yourhere">
                            	<p>You are here:</p>
                                <a href="#">Videos</a>
                                <a href="#">Fashion</a>
                                <a href="#" class="last">Kid</a>
                            </div>
                            <div class="clear"></div>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulu volutpat eget, dapibus ac, lectus. Curabitur dolor sapien, hendrerit non,
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                            	<p class="postbytxt">By: <a href="#">RayWilliams</a></p>
                                <p class="views"><span class="left">Views: </span><a href="#">800</a></p>
                            </div>
                            <div class="right">
                            	<p class="time">1:50</p>
                            	<p class="date"><span>3 days ago</span></p>
                                <div class="rating">
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="greyscal">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="smallsec">
                        	<h6><a href="detail.html" class="colr">Lorem ipsum dolor sit amet</a></h6>
                            <div class="clear"></div>
                            <p class="time">1:50</p>
                            <p class="date">3 days ago</p>
                            <div class="clear"></div>
                            <div class="rating">
                            	<a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="greyscal">&nbsp;</a>
                                <p class="views">800 Views</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video3.gif" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="detail.html" class="colr">Lorem ipsum dolor sit amet, consectetuer</a></h4>
                            <div class="clear"></div>
                            <div class="yourhere">
                            	<p>You are here:</p>
                                <a href="#">Videos</a>
                                <a href="#">Fashion</a>
                                <a href="#" class="last">Kid</a>
                            </div>
                            <div class="clear"></div>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulu volutpat eget, dapibus ac, lectus. Curabitur dolor sapien, hendrerit non,
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                            	<p class="postbytxt">By: <a href="#">RayWilliams</a></p>
                                <p class="views"><span class="left">Views: </span><a href="#">800</a></p>
                            </div>
                            <div class="right">
                            	<p class="time">1:50</p>
                            	<p class="date"><span>3 days ago</span></p>
                                <div class="rating">
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="greyscal">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="smallsec">
                        	<h6><a href="detail.html" class="colr">Lorem ipsum dolor sit amet</a></h6>
                            <div class="clear"></div>
                            <p class="time">1:50</p>
                            <p class="date">3 days ago</p>
                            <div class="clear"></div>
                            <div class="rating">
                            	<a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="greyscal">&nbsp;</a>
                                <p class="views">800 Views</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video4.gif" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="detail.html" class="colr">Lorem ipsum dolor sit amet, consectetuer</a></h4>
                            <div class="clear"></div>
                            <div class="yourhere">
                            	<p>You are here:</p>
                                <a href="#">Videos</a>
                                <a href="#">Fashion</a>
                                <a href="#" class="last">Kid</a>
                            </div>
                            <div class="clear"></div>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulu volutpat eget, dapibus ac, lectus. Curabitur dolor sapien, hendrerit non,
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                            	<p class="postbytxt">By: <a href="#">RayWilliams</a></p>
                                <p class="views"><span class="left">Views: </span><a href="#">800</a></p>
                            </div>
                            <div class="right">
                            	<p class="time">1:50</p>
                            	<p class="date"><span>3 days ago</span></p>
                                <div class="rating">
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="greyscal">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="smallsec">
                        	<h6><a href="detail.html" class="colr">Lorem ipsum dolor sit amet</a></h6>
                            <div class="clear"></div>
                            <p class="time">1:50</p>
                            <p class="date">3 days ago</p>
                            <div class="clear"></div>
                            <div class="rating">
                            	<a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="greyscal">&nbsp;</a>
                                <p class="views">800 Views</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video1.gif" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="detail.html" class="colr">Lorem ipsum dolor sit amet, consectetuer</a></h4>
                            <div class="clear"></div>
                            <div class="yourhere">
                            	<p>You are here:</p>
                                <a href="#">Videos</a>
                                <a href="#">Fashion</a>
                                <a href="#" class="last">Kid</a>
                            </div>
                            <div class="clear"></div>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulu volutpat eget, dapibus ac, lectus. Curabitur dolor sapien, hendrerit non,
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                            	<p class="postbytxt">By: <a href="#">RayWilliams</a></p>
                                <p class="views"><span class="left">Views: </span><a href="#">800</a></p>
                            </div>
                            <div class="right">
                            	<p class="time">1:50</p>
                            	<p class="date"><span>3 days ago</span></p>
                                <div class="rating">
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="greyscal">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="smallsec">
                        	<h6><a href="detail.html" class="colr">Lorem ipsum dolor sit amet</a></h6>
                            <div class="clear"></div>
                            <p class="time">1:50</p>
                            <p class="date">3 days ago</p>
                            <div class="clear"></div>
                            <div class="rating">
                            	<a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="greyscal">&nbsp;</a>
                                <p class="views">800 Views</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video2.gif" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="detail.html" class="colr">Lorem ipsum dolor sit amet, consectetuer</a></h4>
                            <div class="clear"></div>
                            <div class="yourhere">
                            	<p>You are here:</p>
                                <a href="#">Videos</a>
                                <a href="#">Fashion</a>
                                <a href="#" class="last">Kid</a>
                            </div>
                            <div class="clear"></div>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulu volutpat eget, dapibus ac, lectus. Curabitur dolor sapien, hendrerit non,
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                            	<p class="postbytxt">By: <a href="#">RayWilliams</a></p>
                                <p class="views"><span class="left">Views: </span><a href="#">800</a></p>
                            </div>
                            <div class="right">
                            	<p class="time">1:50</p>
                            	<p class="date"><span>3 days ago</span></p>
                                <div class="rating">
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="greyscal">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="smallsec">
                        	<h6><a href="detail.html" class="colr">Lorem ipsum dolor sit amet</a></h6>
                            <div class="clear"></div>
                            <p class="time">1:50</p>
                            <p class="date">3 days ago</p>
                            <div class="clear"></div>
                            <div class="rating">
                            	<a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="greyscal">&nbsp;</a>
                                <p class="views">800 Views</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video3.gif" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="detail.html" class="colr">Lorem ipsum dolor sit amet, consectetuer</a></h4>
                            <div class="clear"></div>
                            <div class="yourhere">
                            	<p>You are here:</p>
                                <a href="#">Videos</a>
                                <a href="#">Fashion</a>
                                <a href="#" class="last">Kid</a>
                            </div>
                            <div class="clear"></div>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulu volutpat eget, dapibus ac, lectus. Curabitur dolor sapien, hendrerit non,
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                            	<p class="postbytxt">By: <a href="#">RayWilliams</a></p>
                                <p class="views"><span class="left">Views: </span><a href="#">800</a></p>
                            </div>
                            <div class="right">
                            	<p class="time">1:50</p>
                            	<p class="date"><span>3 days ago</span></p>
                                <div class="rating">
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="greyscal">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="smallsec">
                        	<h6><a href="detail.html" class="colr">Lorem ipsum dolor sit amet</a></h6>
                            <div class="clear"></div>
                            <p class="time">1:50</p>
                            <p class="date">3 days ago</p>
                            <div class="clear"></div>
                            <div class="rating">
                            	<a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="greyscal">&nbsp;</a>
                                <p class="views">800 Views</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                    <li>
                    	<a href="#" class="thumb"><span class="add">&nbsp;</span><span class="rated">&nbsp;</span><img src="images/video4.gif" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="detail.html" class="colr">Lorem ipsum dolor sit amet, consectetuer</a></h4>
                            <div class="clear"></div>
                            <div class="yourhere">
                            	<p>You are here:</p>
                                <a href="#">Videos</a>
                                <a href="#">Fashion</a>
                                <a href="#" class="last">Kid</a>
                            </div>
                            <div class="clear"></div>
                            <p class="txt">
                            	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed elit. Nulla sem risus, vestibulu volutpat eget, dapibus ac, lectus. Curabitur dolor sapien, hendrerit non,
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                            	<p class="postbytxt">By: <a href="#">RayWilliams</a></p>
                                <p class="views"><span class="left">Views: </span><a href="#">800</a></p>
                            </div>
                            <div class="right">
                            	<p class="time">1:50</p>
                            	<p class="date"><span>3 days ago</span></p>
                                <div class="rating">
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="colrd">&nbsp;</a>
                                    <a href="#" class="greyscal">&nbsp;</a>
                                </div>
                            </div>
                        </div>
                        <div class="smallsec">
                        	<h6><a href="detail.html" class="colr">Lorem ipsum dolor sit amet</a></h6>
                            <div class="clear"></div>
                            <p class="time">1:50</p>
                            <p class="date">3 days ago</p>
                            <div class="clear"></div>
                            <div class="rating">
                            	<a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="colrd">&nbsp;</a>
                                <a href="#" class="greyscal">&nbsp;</a>
                                <p class="views">800 Views</p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    <!-- Column 2 --></div>
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
