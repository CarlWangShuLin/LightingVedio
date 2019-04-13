<script>
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
var ctx = document.getElementById("cdm_cc_y");
</script>

<script>
var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
    labels: [<?php $query  = 'SELECT * '; $query .= 'FROM cdm_cc_y'; $result = mysqli_query($connection, $query); if (!$result) { die('query is wrong'); }?>
      <?php while ($row = mysqli_fetch_array($result)){echo ' " '; echo $row["year"]; echo ' ",  ';} ?>],
    datasets: [{
      label: "Quantity",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [
            <?php $query  = 'SELECT * '; $query .= 'FROM cdm_cc_y'; $result = mysqli_query($connection, $query); if (!$result) { die('query is wrong'); }?>
          <?php while ($row = mysqli_fetch_array($result)) {echo $row["quantity"]; echo ' ,  ';} ?>],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 1000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
</script>