<?php

session_start();

if (isset($_SESSION["a"])) {

?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <title>J & G Store - Admin Dashboard</title>
        <link rel="icon" href="th-removebg-preview.ico" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>

    <body class="adminBody">
        <?php
        include "adminNavBar.php"
        ?>
        <div class="col-10">
            <h2 class="text-center">Reports</h2>

            <div class="row mt-5" style="backdrop-filter: blur(10px); font-weight: bold;">
                <div class="col-4">
                    <a href="adminReportStock.php"><button class="btn btn-outline-info col-12">Stock Report</button></a>
                </div>
                <div class="col-4">
                    <a href="adminReportProduct.php"><button class="btn btn-outline-info col-12">Product Report</button></a>
                </div>
                <div class="col-4">
                    <a href="adminReportUser.php"><button class="btn btn-outline-info col-12">User Report</button></a>
                </div>

            </div>
            <!-- footer -->
            <div class="fixed-bottom col-12">
                <p>&copy; 2024 J & G Store.lk || All Right Reserved</p>
            </div>
            <!-- footer -->


            <script src="script.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

<?php
} else {
    echo ("You're not a valid admin");
}
