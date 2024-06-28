<?php

session_start();

if (isset($_SESSION["a"])) {

?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" />
        <Link rel="stylesheet" href="bootstrap.css" />
        <title>J & G Store - Admin Page</title>
        <link rel="icon" href="th-removebg-preview.ico"   />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>

    <body class="adminBody5" onload="loadChart(); loadChart2(); loadChart3(); loadChart4();">
        <?php

        if (isset($_SESSION["a"])) {

            include "adminNavBar.php";

        ?>
            <div class="container p-5">
                <div class="row justify-content-center p-4 align-items-center border border-5 rounded-5 boX4" style="margin-top: 100px;">
                    <div class="chart-container col-lg-6 col-md-6 col-sm-12 p-2 border border-4 rounded-5 my-3 mx-3 bg-white shadow-lg boX11">
                        <h2 class="text-center text-black">Daily Income</h2>
                        <canvas class="text-white" id="myChart2"></canvas>
                    </div>
                    <div class="chart-container col-lg-3 col-md-6 col-sm-12 p-2 border border-4 rounded-5 my-3 mx-3 bg-white shadow-lg boX11">
                        <h2 class="text-center text-black">Most Sold Product</h2>
                        <canvas class="text-white" id="myChart"></canvas>
                    </div>
                    <div class="chart-container col-lg-4 col-md-6 col-sm-12 p-2 border border-4 rounded-5 my-3 mx-3 bg-white shadow-lg boX11">
                        <h2 class="text-center text-black">Most Sold Category</h2>
                        <canvas class="text-white" id="myChart3"></canvas>
                    </div>
                    <div class="chart-container col-lg-5 col-md-6 col-sm-12 p-2 border border-4 rounded-5 my-3 mx-3 bg-white shadow-lg boX11">
                        <h2 class="text-center text-black">Hourly Income</h2>
                        <canvas class="text-white" id="myChart4"></canvas>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="script.js"></script>
    </body>

    </html>

<?php

        } else {
            echo ("You are not a Valid Admin");
        }
    }
?>