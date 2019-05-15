<!-- Lighting Video header -->
<?php
require('../includes/rank_list_header.php');
?>
<!--//do a query -->
<?php
$query = "SELECT * ";
$query .= "FROM Announcements";

//echo $query;
$result = mysqli_query($connection, $query);
if (!$result) {
    die("query is wrong");
}
?>
</tbody>
<!-- Content Section -->
<div id="content_sec">
    <!-- Column 1 -->
    <div class="col1">
        <!-- Recent Videos -->
        <div class="recent_videos">
            <div class="recent_head">
                <h3>Announcement</h3>
            </div>
            <ul class="display">
                <li>
                    <div class="bigsec">
                        <h4><p class="colr">title</p></h4>
                        <p class="txt">
                            Lorem ipsum
                        </p>
                        <div class="clear"></div>
                        <div class="postedby">
                            <p class="postbytxt">By: <a href="#">RayWilliams</a></p>
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
                </li>
            </ul>
        </div>
    </div>
    <!-- Column 2 -->
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