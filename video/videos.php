<!-- Lighting Video header -->
<?php
require('../includes/rank_list_header.php');
?>
<!DOCTYPE html>
<html>
    <body>
    <!-- Content Section -->
    <div id="content_sec">
    	<!-- Bread Crumb -->
        <div id="crumb">
            <h2>Upload Video:</h2>
            <form method="POST" action="videos.php" enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" >
                <input class="btn btn-primary" type="file" name="myfile" >
                <button type="submit" class="btn btn-primary" name="submit" class="text">Submit</button>
            </form>
        </div>
        <br>
        <br>
    	<!-- Column 1 -->
        <div class="col1">
            <div class="clear"></div>
            <!-- White Section small -->
            <div class="whitesec_search">
                <div class="smallsearch">
                	<input type="text" value="Enter keyword to search" id="searchBox3" name="s" onblur="if(this.value == '') { this.value = 'Enter keyword to search'; }" onfocus="if(this.value == 'Enter keyword to search') { this.value = ''; }" class="bar" />
            		<a href="#" class="buttonone"><span>Search</span></a>
                </div>
            </div>
            <div class="clear"></div>
            <!-- Recent Videos -->
            <div class="recent_videos">
            	<div class="recent_head">
                	<ul class="videocat">
                    	<li>Sort By: </li>
                        <li><a href="#">Recently Added</a></li>
                        <li><a href="#">Most Viewed</a></li>
                        <li><a href="#">Top Rated</a></li>
                        <li class="last"><a href="#">Production Date</a></li>
                    </ul>
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
                <!-- Video Listing -->
                <ul class="display">
                    <li>
                    	<a href="../video/videopage.php" class="thumb"><img src="" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="../video/videopage.php" class="colr">Video Title</a></h4>
                            <div class="clear"></div>
 
                            <div class="clear"></div>
                            <p class="txt">
                            	Details
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                            	<p class="postbytxt">By: <a href="#">Author</a></p>
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
                    	<a href="../video/videopage.php" class="thumb"><img src="" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="../video/videopage.php" class="colr">Video Title</a></h4>
                            <div class="clear"></div>
 
                            <div class="clear"></div>
                            <p class="txt">
                            	Details
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                            	<p class="postbytxt">By: <a href="#">Author</a></p>
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
                    	<a href="../video/videopage.php" class="thumb"><img src="" alt="" /></a>
                        <div class="bigsec">
                        	<h4><a href="../video/videopage.php" class="colr">Video Title</a></h4>
                            <div class="clear"></div>
 
                            <div class="clear"></div>
                            <p class="txt">
                            	Details
                            </p>
                            <div class="clear"></div>
                            <div class="postedby">
                            	<p class="postbytxt">By: <a href="#">Author</a></p>
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
        </div>
        <!-- Column 2 -->    </div>
    <div class="clear"></div>
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

<?php
require('../video/upload.php');
?>
