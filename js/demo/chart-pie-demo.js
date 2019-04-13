// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("cdm_mcc");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["1", "2", "3", "4", "7", "10"],
    datasets: [{
      data: [10, 10, 10, 10, 10, 10],
      backgroundColor: ['#1f4193', '#ee7a33', '#e40082', '#00a14e','#84c4d0', '#0066b2', '#e40082'],
    }],
  },
});
