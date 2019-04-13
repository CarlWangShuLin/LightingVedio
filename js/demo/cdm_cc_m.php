<script>
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
</script>

<?php $year = $_GET[year]; ?>

<script>

var ctx = document.getElementById("cdm_cc_m");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dece"],
    datasets: [{
      label: "Quantity",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [
          <?php $query  = 'SELECT Jan,Feb,Mar,Apr,May,Jun,Jul,Aug,Sep,Oct,Nov,Dece '; $query .= "FROM cdm_cc_m WHERE year= $year"; $result = mysqli_query($connection, $query); if (!$result) { die('query is wrong'); }?>
          <?php while ($row = mysqli_fetch_array($result)) {echo $row["Jan"]; echo ' ,  '; echo $row["Feb"]; echo ' ,  '; echo $row["Mar"]; echo ' ,  '; echo $row["Apr"]; echo ' ,  '; echo $row["May"]; echo ' ,  '; echo $row["Jun"]; echo ' ,  '; echo $row["Jul"]; echo ' ,  '; echo $row["Aug"]; echo ' ,  '; echo $row["Sep"]; echo ' ,  '; echo $row["Oct"]; echo ' ,  '; echo $row["Nov"]; echo ' ,  '; echo $row["Dece"]; echo ' ,  ';} ?>
            ],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 800,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

</script>
