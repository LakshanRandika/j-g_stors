<?php
session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

    $rs = Database::search("SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`product_id` ORDER BY `stock`.`stock_id` ASC");
    $num = $rs->num_rows;
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="style.css" />
        <title>J & G Store Stock Report</title>
        <link rel="icon" href="th-removebg-preview.ico" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>

    <body class="arb d-flex">
        <div class="row">
            <div class="container mt-4 printbtn">
                <a href="adminReport.php"><img src="1-removebg-preview.ico" style="width: 100px; cursor: pointer;" /></a>
            </div>

            <div class=" row blue_Box justify-content-center align-content-center d-flex container col-10 col-lg-10 mt-5 mt-lg-5 blue_Box">
                <div class="container ">
                    <h2 class="text-center " style="color: blanchedalmond;">Stock Report</h2>
                    <table class="table table-hover table-bordered  text-center">

                        <thead>
                            <tr>
                                <th>Stock ID</th>
                                <th>Product Name</th>
                                <th>Stock Qty</th>
                                <th>Unit Price</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php

                            for ($i = 0; $i < $num; $i++) {

                                $d = $rs->fetch_assoc();

                            ?>

                                <tr>
                                    <td><?php echo $d["product_id"] ?></td>
                                    <td><?php echo $d["name"] ?></td>
                                    <td><?php echo $d["qty"] ?></td>
                                    <td><?php echo $d["price"] ?></td>
                                </tr>

                            <?php
                            }

                            ?>



                        </tbody>
                    </table>
                </div>
                <div class="container d-flex justify-content-center  gap-4">
                    <button style="color: blanchedalmond; backdrop-filter: blur(10px);" class="btn btn-outline-dark col-2 printbtn" onclick="window.print()">Print</button>
                    <!-- <button class="btn btn-outline-danger text-light col-2" >Download</button> -->
                </div>
            </div>

            
        </div>

        <!-- footer -->
        <div class="fixed-bottom col-12">
            <p>&copy; 2024 J & G Store.lk || All Right Reserved</p>
        </div>
        <!-- footer -->


        <script src="script.js"></script>
        <script src="bootstrap.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>

    </html>

<?php
} else {
    echo ("You are not a valid admin");
}

?>