<?php
session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

    $rs = Database::search("SELECT * FROM `product` 
    INNER JOIN `brand` ON `product`.`product_id`=`brand`.`brand_id` 
    INNER JOIN `color` ON `product`.`product_id`=`color`.`color_id` 
    INNER JOIN `category` ON `product`.`product_id`=`category`.`category_id` 
    INNER JOIN `size` ON `product`.`product_id`=`size`.`size_id` 
	 ORDER BY `product`.`product_id` ASC");

    $num = $rs->num_rows;
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="style.css" />
        <title>J & G Store Product Report</title>
        <link rel="icon" href="th-removebg-preview.ico" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>

    <body class="arb">

        <div class="container">
            <div class="container mt-3">
                <a href="adminReport.php"><img src="1-removebg-preview.ico " style="width: 100px; cursor: pointer;"></a>
            </div>

            <div class="container col-12 col-lg-10 mt-3 mt-lg-5 blue_Box">
                <div class="container mt-5  ">
                    <h2 class="text-center " style="color: yellowgreen;">Product Report</h2>
                    <table style="background-color: darkred;" class="table table-hover table-bordered  text-center  mt-5">

                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Brand Name</th>
                                <th>Color</th>
                                <th>Category</th>
                                <th>Size</th>
                                <th>Description</th>
                                <th>Image</th>

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
                                    <td><?php echo $d["brand_id"] ?></td>
                                    <td><?php echo $d["color_id"] ?></td>
                                    <td><?php echo $d["category_id"] ?></td>
                                    <td><?php echo $d["size_id"] ?></td>
                                    <td><?php echo $d["discription"] ?></td>
                                    <td><img src="<?php echo $d["img"] ?>" height="100" /></td>
                                </tr>

                            <?php
                            }

                            ?>
                        </tbody>
                    </table>
                    <div class="container mt-3 d-flex justify-content-end">
                        <button style="color: blanchedalmond; backdrop-filter: blur(10px);" class="btn btn-outline-dark col-2" onclick="window.print()">Print</button>
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