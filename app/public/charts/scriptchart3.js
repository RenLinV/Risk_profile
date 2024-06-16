// Подключаем библиотеку Chart.js для рисования графика
const labelar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 
    18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 
    36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 
    54, 55, 56, 57, 58, 59];
const data3 =[350.52, 336.5, 341.7, 306.0, 283.78, 320.5, 316.97, 309.83, 
    332.9, 318.98, 315.0, 294.6, 331.0, 352.25, 352.62, 359.4, 358.5, 354.0, 
    393.0, 379.5, 428.5, 436.19, 416.5, 354.0, 323.0, 266.0, 274.5, 276.89, 
    221.7, 222.6, 203.0, 251.03, 250.09, 206.8, 220.0, 221.48, 154.0, 114.0, 
    109.79, 127.0, 120.74, 117.37, 118.0, 128.49, 113.01, 118.4, 120.6, 174.68, 
    124.5, 97.2, 120.19, 83.81, 88.2, 60.67, 40.5, 27.3, 24.3, 20.65, 24.11, 
    19.12, 18.7, ];

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
          data: data3,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgb(0, 255, 21)',
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