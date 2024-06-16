// Подключаем библиотеку Chart.js для рисования графика
const labelar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 
    18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 
    36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 
    54, 55, 56, 57, 58, 59];
const data2 =[183.51, 192.33, 193.8, 224.35, 225.2, 264.5, 272.4, 253.57, 
    226.99, 222.36, 218.0, 214.86, 182.0, 203.32, 189.8, 194.0, 186.3, 217.9, 
    207.8, 214.42, 225.17, 233.24, 238.55, 233.49, 224.2, 227.71, 234.89, 
    233.98, 254.75, 252.2, 233.36, 187.21, 197.25, 200.5, 203.22, 221.57, 
    226.1, 229.14, 200.99, 249.63, 271.65, 258.11, 270.17, 291.02, 297.73, 
    310.79, 306.45, 305.59, 327.94, 340.99, 356.14, 315.0, 293.49, 269.42, 
    220.0, 180.0, 169.0];

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
          data: data2,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgb(255, 0, 81)',
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