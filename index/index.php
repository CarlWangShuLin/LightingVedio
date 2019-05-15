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
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<ul class='display'>
                <li>
                    <div class='bigsec'>
                        <h4>
                            <p class='colr'>" . $row["an_name"] . "</p>";
                echo "</h4>
                <p class='txt'>" . $row["an_contents"] . "</p>
                <div class='clear'></div> <div class='postedby'>
                <p class='postbytxt'>By: <a href='#'>Lighting Video</a></p>
            </div>
            <div class='right'>
                <p class='time'>" . $row["an_time"] . "</p>
            </div>
        </div>
        </li>
        </ul> ";
            }
            ?>
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