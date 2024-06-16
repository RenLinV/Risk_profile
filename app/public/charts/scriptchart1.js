const labelar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 
    18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 
    36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 
    54, 55, 56, 57, 58, 59];
const data1 =[27.83, 49.95, 38.37, 42.44, 47.39, 59.91, 64.72, 69.21, 82.94, 
    88.4, 76.36, 85.79, 78.58, 71.06, 76.96, 84.3, 78.16, 85.89, 101.27, 101.64, 
    104.34, 105.85, 102.19, 106.86, 99.89, 97.65, 100.02, 101.54, 64.85, 70.81, 
    82.2, 87.55, 78.86, 90.3, 100.1, 94.97, 94.08, 81.5, 86.4, 73.6, 62.88, 76.9, 
    73.5, 74.5, 75.3, 90.53, 102.9, 101.26, 96.5, 107.0, 109.9, 123.55, 132.56, 
    133.0, 139.15, 143.5, 145.34, 147.4, 158.3];

document.addEventListener('DOMContentLoaded', function() {
    const totalDuration = 30000;
    const delayBetweenPoints = 600;
    const animation = {
        x: {
            type: 'number',
            easing: 'linear',
            duration: delayBetweenPoints,
            from: NaN, // the point is initially skipped
            delay(ctx) {
            if (ctx.type !== 'data' || ctx.xStarted) {
                return 0;
            }
            ctx.xStarted = true;
            return ctx.index * delayBetweenPoints;
            }
        }
    };

    const lineChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        animation,
        interaction: {
          intersect: false
        },
        plugins: {
          legend: false
        },
        scales: {
          x: {
            type: 'linear',
            grid: {
                color: 'rgb(238, 171, 186)',
                lineWidth: 0.5,
            }
          },
          y: {
            type: 'linear',
            grid: {
                color: 'rgb(238, 171, 186)',
                lineWidth: 0.5,
            }
          }
        }
      };

    const lineChartData = {
        labels: labelar,
        datasets: [{
          data: data1,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgb(0, 255, 242)',
          borderWidth: 5,
          pointRadius: 3,
        }]
    };
     
    const lineChart = new Chart(document.getElementById('lineChart').getContext('2d'), {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions,
      });
});