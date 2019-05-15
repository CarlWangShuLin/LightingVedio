<?php
//Lighting Video header
require('../includes/rank_list_header.php');
require('../includes/db.php');
require('select.php');
require('comment.php');
?>
<!-- Popularity -->
<?php
$vd_id = $_GET[id];
$queryb  = "UPDATE videos ";
$queryb .= "SET vd_popularity=vd_popularity+1 ";
$queryb .= "WHERE vd_id = $vd_id";
mysqli_query($connection, $queryb);
if (!$result) {
    die("query is wrong");
 }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="IE=edge" >
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
<title>Video Player</title>
<link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.8.1/skins/default/aliplayer-min.css" />
<!-- Bootstrap core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="../css/comment.css" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="https://g.alicdn.com/de/prismplayer/2.8.1/aliplayer-min.js"></script>
</head>
<body>
<div class="prism-player" id="player-con"></div>
<script>
var player = new Aliplayer({
  "id": "player-con",
  "source": "<?php echo $video ?>",
  "width": "100%",
  "height": "500px",
  "autoplay": true,
  "isLive": false,
  "rePlay": false,
  "playsinline": true,
  "preload": true,
  "language": "en-us",
  "controlBarVisibility": "hover",
  "useH5Prism": true,
  "skinLayout": [
    {
      "name": "bigPlayButton",
      "align": "blabs",
      "x": 30,
      "y": 80
    },
    {
      "name": "H5Loading",
      "align": "cc"
    },
    {
      "name": "errorDisplay",
      "align": "tlabs",
      "x": 0,
      "y": 0
    },
    {
      "name": "infoDisplay"
    },
    {
      "name": "tooltip",
      "align": "blabs",
      "x": 0,
      "y": 56
    },
    {
      "name": "thumbnail"
    },
    {
      "name": "controlBar",
      "align": "blabs",
      "x": 0,
      "y": 0,
      "children": [
        {
          "name": "progress",
          "align": "blabs",
          "x": 0,
          "y": 44
        },
        {
          "name": "playButton",
          "align": "tl",
          "x": 15,
          "y": 12
        },
        {
          "name": "timeDisplay",
          "align": "tl",
          "x": 10,
          "y": 7
        },
        {
          "name": "fullScreenButton",
          "align": "tr",
          "x": 10,
          "y": 12
        },
        {
          "name": "volume",
          "align": "tr",
          "x": 5,
          "y": 10
        }
      ]
    }
  ]
}, function (player) {
    player._switchLevel = 0;
  }
);
</script>



        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form method="post" action="videopage.php">
              <div class="form-group">
              <textarea name="content" class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <div style="background-color: white !important;">
        <!-- Single Comment -->
        
        <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
        <h5 class="mt-0">Commenter Name</h5>
        <?php echo $content; ?>
        </div>
        </div>

        </div>
        </div>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php

if (isset($_POST['submit'])){

  $content = $_POST['cm_content'];
  
$query = "INSERT INTO comments (cm_contents) VALUES ('$content')";
$result = mysqli_query($connection, $query);
mysqli_query($connection, $query);

}

?>

</body>
</html>