<script>
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
</script>

<?php $year = $_GET[year]; ?>

<script>
var ctx = document.getElementById("cdm_ycc");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["line 1", "line 2", "line 3", "line 4", "line 7", "line 10"],
    datasets: [{
      data: [<?php $query  = 'SELECT line1,line2,line3,line4,line7,line10 '; $query .= "FROM cdm_ycc WHERE year= $year"; $result = mysqli_query($connection, $query); 
if (!$result) { die('query is wrong'); }
while ($row = mysqli_fetch_array($result)) 
{echo $row["line1"]; echo ',';echo $row["line2"]; echo ',';echo $row["line3"]; echo ',';echo $row["line4"]; echo ',';echo $row["line7"]; echo ',';echo $row["line10"]; echo ',';}?>],
      backgroundColor: ['#1f4193', '#ee7a33', '#e40082', '#00a14e','#84c4d0', '#0066b2', '#e40082'],
    }],
  },
});
</script>