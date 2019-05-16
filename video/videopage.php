<?php
//Lighting Video header
require('../includes/rank_list_header.php');
require('../includes/db.php');
require('select.php');
?>
<!-- Popularity -->
<?php
$vd_id = $_GET['id'];
$queryb  = "UPDATE videos ";
$queryb .= "SET vd_popularity=vd_popularity+1 ";
$queryb .= "WHERE vd_id = $vd_id";
mysqli_query($connection, $queryb);

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

  <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
           <form method="post" action="comment.php"class="style">
              <div class="form-group">
              <input type="text" name="cm_name" placeholder="Title" required>
              <input type="number" name="vd_id" readonly="readonly" value="<?php echo $vd_id; ?>">
              <textarea name="cm_contents" class="form-control" rows="3" placeholder="Content" required></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        
 <?php

                        $vd_id = $_GET['id'];
                        $query = "SELECT * ";
                        $query .= "FROM comments ";
                        $query .= "WHERE vd_id = $vd_id";
                        $result = mysqli_query($connection, $query);
                        //echo $query;
                        if (!$result) {
                            die("query is wrong");
}
                      while ($row = mysqli_fetch_array($result)) {
                        echo '<div style="background-color: white !important;">';
                        
                        echo '<div class="media mb-4">';
                        echo '<div class="media-body">';
                        echo '<h5 class="mt-0">'. $row['cm_name'] . '</h5>';
                        echo '<div>'. $row['cm_contents'] . '</div>';
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        

                      }
?>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>