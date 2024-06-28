<?php

include "connection.php";

$stockId = $_GET["s"];
// echo($stockId);

if (isset($stockId)) {

    $q = "SELECT * 
    FROM `stock` 
    INNER JOIN `product` ON `stock`.`product_id` = `product`.`product_id`
    INNER JOIN `brand` ON `product`.`brand_id` = `brand`.`brand_id`
    INNER JOIN `color` ON `product`.`color_id` = `color`.`color_id`
    INNER JOIN `category` ON `product`.`category_id` = `category`.`category_id`
    INNER JOIN `size` ON `product`.`size_id` = `size`.`size_id` 
    WHERE `stock`.stock_id = '" . $stockId . "'";

    $rs = Database::search($q);
    $d = $rs->fetch_assoc();

?>


    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>J & G</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>

    <body class="arb">
        <?php include "navBar.php"; ?>
        <br><br><br>

        
            <div class=" blue_Box col-8 row shadow-lg p-5 rounded-2 m-auto mt-5 mt-lg-5" >
                <div class="col-6 ">
                    <img src="<?php echo $d["img"]; ?>" class="rounded-3 shadow-lg" width="320px">
                </div>
                <div class="col-6">
                    <h4 class="text-info"><?php echo $d["name"]; ?></h4>
                    <h5 class="mt-3">Brand : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $d["brand_name"]; ?></h5>
                    <h6 class="mt-3">Categari :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $d["category_name"]; ?></h6>
                    <h6 class="mt-3">Color :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $d["color_name"]; ?></h6>
                    <h6 class="mt-3">Size : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $d["size_name"]; ?></h6>
                    <p class="mt-3">Description : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $d["discription"]; ?></p>
                    <div class="row mt-5">
                        <div class="col-2">
                            <input type="text" placeholder="Qty" class="form-control" id="qty">
                        </div>

                        <div class="col-6 mt-2">
                            <h6 class="text-warning"><?php echo $d["qty"]; ?></h6>
                        </div>

                    </div>
                    <h5><?php echo $d["price"]; ?></h5>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-outline-primary col-6" onclick="addtoCart('<?php echo $d['stock_id'] ?>');">Add To Cart</button>
                        <button class="btn btn-outline-primary col-6 ms-2" onclick="buyNow('<?php echo $d['stock_id'] ?>');">Buy Now</button>


                    </div>

                </div>

            </div>

        



        <!-- Footer -->
        <div class=" col-12 mt-3">
            <p class="text-center"> 2024 J & G Store.lk || All Right Reserved</p>
        </div>
        <!-- Footer -->


        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    </body>

    </html>





<?php


} else {
    header("location:index.php");
}

?>