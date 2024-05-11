<?php
 include_once("connections/connection.php");
 include("count.php");
 include("coachcount.php");
 include("total.php");

$conn = connection();

// Sample data, replace with your actual data retrieval logic
$totalProfit = $totalAmount; // Example total profit

// JSON encode the data for use in JavaScript
$chartData = json_encode(['Total Profit' => $totalProfit]);

?>
<!DOCTYPE html>
<html lang = "eng">
    <head>
    <meta charset = "UTF-8">
    <Meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content ="ie=edge">
    <title>Dashboard Page</title>
    <link rel="icon" href="img/Section 1.png" type="image/icon type">
    <link rel = "stylesheet" href = "css/dashboard.css">
    </head>
    <htmldi>
        <!-- HEADER-->
        <div class = "heading">
            <img class ="pic"src ="img/Section 1.png">
            <p>Gym Management System</p>
            <div class ="admin-pic">
                <span class="ad">Admin</span>
            </div>
        </div>
        <!--SIDE BAR-->
        <div class = "sidebar">
            <div class ="dropdown">
                <button><a href="dashboard.php">Dashboard</a></button>
            </div>
            <div class = "dropdown">
                <button>Member</button>
                <div class="content">
                    <a href ="member.php">List</a>
                    <a href ="add.php">New Member</a>
                </div>
            </div>
                <div class = "dropdown">
                    <button>Coach</button>
                    <div class="content">
                        <a href ="coach.php">List</a>
                        <a href ="AddCoach.php">New Member</a>
                    </div>
                </div>
            <div class = "dropdown">
                <button><a href ="billing.php">Billing</a></button>
            </div>
            <div class = "dropdown">
                <button>Equipment</button>
                <div class="content">
                    <a href="equip-view.php">List</a>
                    <a href="equipment.php">Add Equipment</a>
                </div>
            </div>
        </div>
        <!--BODY (DATA ANALYTICS-->
        <div class = "total_profit">
            <a href ="billing.php" id ="TOTAL">PROFIT
                <p id ="count"><?php echo $totalAmount; ?></p>
            </a>
        </div>

        <div class = "totalmembers">
            <a href ="member.php" id ="TOTAL">Clients
                <p id ="count"><?php echo $total_members; ?></p>
            </a>
        </div>

        <div class = "totalCoach">
            <a href ="coach.php" id ="TOTAL">Coach
                <p id ="count"><?php echo $totalCOACH; ?></p>
            </a>
        </div>

        <div id="chartContainer">
            <!-- Update the JavaScript code -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <canvas id="profitChart" width="500" height="300"></canvas>
            <script>
                // Get the chart data from PHP
                var chartData = <?php echo $chartData; ?>;

                // Create a new Chart object
                var ctx = document.getElementById('profitChart').getContext('2d');
                var profitChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: Object.keys(chartData),
                        datasets: [{
                            label: 'Profit',
                            data: Object.values(chartData),
                            backgroundColor: 'rgba(54, 162, 235, 0.5)', // Blue color with transparency
                            borderColor: 'rgba(54, 162, 235, 1)', // Blue color without transparency
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
            </script>
        </div>
    </body>
</html>