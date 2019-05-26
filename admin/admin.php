<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
require_once('../includes/db.php');
require_once('../includes/head.php');

include('../includes/adminhead.php');
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'default';
}
if ($page == 'default') {
    include("chart.php");
} else if ($page == 'table') {
    include("a_c_table.php");
} else if ($page == 'video_cm') {
    include("b_v_table.php");
} else if ($page == 'an') {
    include("an_co_table.php");
} else if ($page == "bg") {
    include("blog.php");
}
?>
