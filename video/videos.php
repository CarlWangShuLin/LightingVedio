<!-- Lighting Video header -->
<?php
require_once('../includes/db.php');
require('../includes/rank_list_header.php');
?>

<!-- Video -->
<?php
$query = "SELECT vd_id, vd_name, vd_date FROM videos";
$result = mysqli_query($connection, $query);
if (!$result) {
   die("query is wrong");
}

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
                <input class="btn btn-primary" type="file" name="myfile">
                <div class="input-group">
                <input class="form-control" type="text" name="videoname" placeholder="Videoname">
                </div>
                <button type="submit" class="btn btn-primary" name="submit" class="text">Submit</button>
            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    	<!-- Column 1 -->
        <div class="col1">
            <div class="clear"></div>
            <!-- White Section small -->
            <div class="clear"></div>
            <!-- Recent Videos -->
            <div class="recent_videos">
            	<div class="recent_head">
                    <div class="recent_buttons">
                    	<ul>
                        	<li class="gridbutn"><a href="#" class="switch_thumb">&nbsp;</a></li>
                            <li>
                        	    <a href="#" class="previou';s  btn">&nbsp;</a>
                                <a href="#" class="nextbtn">&nbsp;</a>
                            </li>
                     </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <!-- Video Listing -->
                    <?php
                      while ($row = mysqli_fetch_array($result)) {
                        echo '<ul class="display">';
                        echo '<li>';
                    	echo '<a href="../video/videopage.php" class="thumb"><img src="" alt="" /></a>';
                        echo '<div class="bigsec">';
                        echo '<h4><a href="../video/videopage.php?id='.$row["vd_id"]. '" class="colr"><tr><td>' .$row["vd_name"]. '</td></tr></a></h4>';
                        echo '<div class="clear"></div>';   
                        echo  '<div class="clear"></div>';
                        echo    '<p class="txt">';
                        echo    	'Details</p>';                 
                        echo     '<div class="clear"></div>';
                        echo        '<div class="postedby">';
                        echo    	'<p class="postbytxt">By: <a href="#">Author</a></p>';
                        echo        '<p class="views"><span class="left">Views: </span><a href="#">800</a></p>';
                        echo    '</div>';
                        echo    '<div class="right">';
                        echo    	'<p class="date"><span>' .$row["vd_date"]. '</span></p>';
                        echo    '</div>';
                        echo '</div>';
                        echo    '<div class="smallsec">';
                        echo	'<h6><a href="detail.html" class="colr">Lorem ipsum dolor sit amet</a></h6>';
                        echo    '<div class="clear"></div>';
                        echo    '<p class="date">' .$row["vd_date"]. '</p>';
                        echo '</div>';
                        echo '</li>';
                        echo '</ur>';
                      }
                    ?>
                <!-- Pagination -->
                <div class="paginations">
                	<h5 class="pagehead">PAGE</h5>
                    <ul>
                    	<li class="leftpage"><a href="#">&nbsp;</a></li>
                        <li class="pages"><a href="#" class="selected">1</a></li>
                        <li class="nextpage"><a href="#">&nbsp;</a></li>
                    </ul>
                </div>
            </div>
        </div>
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