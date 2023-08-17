<h1>My Dashboard Home at Pages</h1>

<div class="page-title">
  <div class="title_left">
    <h3>Dashboard</h3>
  </div>
</div>

<div class="clearfix"></div>

<div class="row">
    <div class="top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6" style="background-color: #071C3D; color: black;">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                <div class="count"><?= $countMembers ?></div>
                <h3>Members</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6" style="background-color: #071C3D; color:black;">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-comments-o"></i></div>
                <div class="count"><?= $countBooks ?></div>
                <h3>Books</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6" style="background-color: #071C3D; color:black;">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                <div class="count"><?= $countNewspapers ?></div>
                <h3>Newspapers</h3>
            </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6" style="background-color: #071C3D; color:black;">
            <div class="tile-stats">
                <div class="icon"><i class="fa fa-check-square-o"></i></div>
                <div class="count"><?= $countMagazines ?></div>
                <h3>Magazines</h3>
            </div>
        </div>
    </div>
</div>

<div class="row" style="display: block;">
  <!-- <canvas id="myChart"></canvas> -->
  <canvas id="barChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const barChart = document.getElementById('barChart');

    // x-axis labels
    const labels = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
    
    // list of datasets
    const data = {
        labels: labels,
        datasets: [
            {
                label: 'Rental',
                data: [26, 27, 24, 34, 24, 29, 25, 26, 27, 22, 22, 27, 27, 26, 36, 32, 29, 33, 35, 26, 26, 32, 40, 26, 32, 31, 39, 42, 17, 0, 0],
                stack: 'Stack 0',
                backgroundColor: '#112E51',
                order: 2
            },
            {
                label: 'Subs',
                data: [0, 3, 2, 1, 5, 1, 0, 0, 2, 2, 1, 1, 0, 1, 1, 1, 1, 0, 1 , 3, 2, 1, 1, 3, 1, 1, 1, 0, 0, 0, 0],
                stack: 'Stack 0',
                backgroundColor: '#ff6364',
                order: 2
            },
            {
                label: 'Limo',
                data: [0, 3, 1, 3, 2, 0, 2, 0, 3, 6, 2, 4, 0, 3, 1, 2, 2, 1, 0, 1, 0, 4, 1, 3, 3, 0, 1, 5, 1, 0, 0],
                stack: 'Stack 0',
                backgroundColor: '#97BCE9',
                order: 2
            },
            {
                label: 'Cancel',
                data: [8, 4, 9, 4, 7, 8, 5, 6, 5, 12, 10, 5, 4, 5, 10, 7, 7, 6, 6, 11, 9, 8, 6, 10, 7, 6, 9, 10, 13, 0, 0],
                stack: 'Stack 1',
                backgroundColor: '#2E78D2',
                order: 2
            },
            {
                label: 'Target Booking',
                data: [49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49, 49],
                type: 'line',
                borderColor: '#007bff',
                backgroundColor: '#007bff',
                order: 2
            },
            {
                label: 'Target Sales',
                data: [48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58, 48956.58],
                type: 'line',
                borderColor: '#dc3545',
                backgroundColor: '#dc3545',
                yAxisID: 'targetSales',
                order: 2,
            },
            {
                label: 'Total Sales',
                data: [22437.7, 40207.85, 29069.2, 29107.75, 24312.85, 29172.15, 22646.75, 24509.95, 31214.65, 36366.66, 28050.3, 38145.2, 33912.03, 26652.45, 37781.21, 30999.3, 29895.4, 30974.45, 39602, 26051.35, 23631.35, 45338.84, 39006.9, 29827.8, 37394.45, 29341.45, 42502.25, 47338.05, 49034.5, 0, 0],
                type: 'line',
                yAxisID: 'totalSales',
                backgroundColor: '#fca311',
                borderColor: '#fca311',
                order: 1
            }            
        ]
    }

    // configures the chart
    const config = {
        type: 'bar',
        data: data,
        options: {
            legend: {
                position: 'top',
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Chart.js Bar Chart - Stacked'
                }
            },
            responsive: true,
            maintainAspectRatio: true,
            scales: {
                x: {
                    stacked: true,
                    title: {
                        display: true,
                        text: 'Days'
                    }
                },
                y: {
                    stacked: true,
                    title: {
                        display: true,
                        text: 'Number of Booking'
                    }
                },
                targetSales: {
                    beginAtZero: true,
                    type: 'linear',
                    position: 'right',
                    title: {
                        display: true,
                        text: 'Total Sales (RM)'
                    },
                },
                totalSales: {
                    display: false,
                }
            }
        }
    }

    // display chart
    const myChart = new Chart(barChart, config);
</script>
