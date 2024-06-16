const dataOFZ = [100.0, 100.1, 101.95, 100.75, 99.75, 100.5, 99.5, 99.5, 
    102.25, 100.25, 101.25, 101.0, 100.0, 102.0, 104.75, 104.75, 105.75, 
    108.5, 108.5, 108.5, 111.25, 112.25, 113.25, 114.5, 115.0, 116.0, 118.75, 
    117.75, 117.75, 118.5, 117.5, 116.5, 118.25, 117.75, 117.75, 119.0, 118.0, 
    119.0, 119.75, 118.75, 117.75, 118.5, 117.5, 116.5, 117.75, 116.25, 115.25, 
    116.5, 115.0, 114.0, 114.75, 115.75, 117.75, 121.5, 122.5, 123.5, 126.25, 
    127.25, 131.25, 135.0];
const dataVDO = [100.0, 102.0, 103.2, 106.0, 103.0, 103.0, 101.0, 101.0, 101.0, 
    100.0, 99.0, 106.0, 107.0, 107.0, 108.0, 106.0, 105.0, 107.0, 103.0, 100.0, 
    102.0, 101.0, 100.0, 102.0, 102.0, 103.0, 110.0, 111.0, 111.0, 116.0, 112.0, 
    109.0, 110.0, 108.0, 113.0, 121.0, 119.0, 121.0, 120.0, 122.0, 125.0, 131.0, 
    133.0, 135.0, 140.0, 144.0, 144.0, 146.0, 146.0, 138.0, 136.0, 135.0, 142.0, 
    146.0, 147.0, 152.0, 149.0, 155.0, 160.0, 160.0];
const dataStock= [100.0, 190.04, 171.84, 145.12, 167.23, 211.38, 241.44, 250.13, 
    281.89, 308.91, 299.93, 303.67, 305.5, 286.99, 286.43, 293.57, 294.24, 291.74, 
    352.83, 359.61, 367.72, 374.57, 362.55, 364.55, 375.59, 343.56, 343.83, 368.71, 
    356.69, 294.9, 299.41, 301.88, 313.87, 313.87, 344.33, 355.86, 344.08, 335.6, 
    307.44, 305.54, 274.68, 275.51, 286.47, 268.73, 276.45, 325.61, 385.73, 368.93, 
    359.94, 378.65, 401.39, 440.1, 474.17, 494.28, 492.11, 506.3, 541.87, 529.15, 
    565.82, 577.1];

const labelar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 
    18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 
    36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 
    54, 55, 56, 57, 58, 59, 60];


document.addEventListener('DOMContentLoaded', function() {
    const totalDuration = 10000;
    const delayBetweenPoints = totalDuration / 60;
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
                lineWidth: 0.1,
            }
          },
          y: {
            type: 'linear',
            grid: {
                color: 'rgb(238, 171, 186)',
                lineWidth: 0.1,
            }
          }
        }
      };

    const lineChartData = {
        labels: labelar,
        datasets: [{
          data: dataOFZ,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgb(255, 99, 132)',
          borderWidth: 1
        }]
    };
    const lineChartData1 = {
        labels: labelar,
        datasets: [{
          data: dataVDO,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgb(8, 244, 201)',
          borderWidth: 1
        }]
    };
    const lineChartData2 = {
        labels: labelar,
        datasets: [{
          data: dataStock,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgb(255, 18, 18)',
          borderWidth: 1
        }]
    };
    
    
    const lineChart = new Chart(document.getElementById('lineChart').getContext('2d'), {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions,
      });
    const lineChart1 = new Chart(document.getElementById('lineChart1').getContext('2d'), {
        type: 'line',
        data: lineChartData1,
        options: lineChartOptions,
    });
    const lineChart2 = new Chart(document.getElementById('lineChart2').getContext('2d'), {
        type: 'line',
        data: lineChartData2,
        options: lineChartOptions,
    });
});