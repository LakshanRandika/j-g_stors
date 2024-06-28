<?php

session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>J & G Store</title>
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="th-removebg-preview.ico" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    </head>

    <body class="arb d-flex ">
        <?php
        include "adminNavBar.php";
        ?>



        <div class=" justify-content-center mt-5 mt-lg-12 ">
        <br>
        <br>
        <br>
        <br>

            <div class="row  justify-content-center mt-5 mt-lg-5 ">
                <div class="blue_Box col-10 col-lg-6   ">

                    <h2 class="text-center">Product Registration</h2>

                    <div class="mb-2">
                        <label class="form-label" for="">Product Name</label>
                        <input type="text" class="form-control" id="pname" placeholder="Enter Product Name">
                    </div>

                    <div class="row">
                        <div class="mb-2 col-6">
                            <label class="form-label" for="">Brand</label>
                            <select class="form-select" id="brand">
                                <option value="0">Select</option>
                                <?php
                                $rs = Database::search("SELECT * FROM `brand`");
                                $num = $rs->num_rows;

                                for ($i = 0; $i < $num; $i++) {
                                    $data = $rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo ($data["brand_id"]); ?>"><?php echo ($data["brand_name"]); ?></option>
                                <?php
                                }

                                ?>
                            </select>
                        </div>

                        <div class="mb-1 col-6">
                            <label class="form-label" for="">Category</label>
                            <select class="form-select" id="cat">
                                <option value="0">Select</option>
                                <?php
                                $rs = Database::search("SELECT * FROM `category`");
                                $num = $rs->num_rows;

                                for ($i = 0; $i < $num; $i++) {
                                    $data = $rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo ($data["category_id"]); ?>"><?php echo ($data["category_name"]); ?></option>
                                <?php
                                }

                                ?>
                            </select>
                        </div>
                        <div class="mb-1 col-6">
                            <label class="form-label" for="">color</label>
                            <select class="form-select" id="color">
                                <option value="0">Select</option>
                                <?php
                                $rs = Database::search("SELECT * FROM `color`");
                                $num = $rs->num_rows;

                                for ($i = 0; $i < $num; $i++) {
                                    $data = $rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo ($data["color_id"]); ?>"><?php echo ($data["color_name"]); ?></option>
                                <?php
                                }

                                ?>
                            </select>
                        </div>
                        <div class="mb-1 col-6">
                            <label class="form-label" for="">size</label>
                            <select class="form-select" id="size">
                                <option value="0">Select</option>
                                <?php
                                $rs = Database::search("SELECT * FROM `size`");
                                $num = $rs->num_rows;

                                for ($i = 0; $i < $num; $i++) {
                                    $data = $rs->fetch_assoc();
                                ?>
                                    <option value="<?php echo ($data["size_id"]); ?>"><?php echo ($data["size_name"]); ?></option>
                                <?php
                                }

                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="">Description</label>
                        <textarea class="form-control" id="desc"></textarea>
                    </div>
                    <div class="row">
                        <div class="mb-2 col-lg-6 h-50 mt-lg-3 col-2">
                            <label class="form-label" for="">Product Image</label>
                            <input id="file" class="form-control col-2" type="file" multiple>
                        </div>

                        <div class="d-grid col-lg-6">
                            <button class=" btn btn-outline-primary  mt-lg-5" onclick="regProduct();">Register Product</button>
                        </div>
                    </div>
                </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <div class="blue_Box col-10 col-lg-5 mt-5   ">

                    <h2 class="text-center mt-2">Stock Update</h2>

                    <div class="mb-3 ">
                        <label for="">Product Name</label>
                        <select class="form-select" id="selectProduct">
                            <option>Select</option>
                            <?php
                            $rs = Database::search("SELECT * FROM `product`");
                            $num = $rs->num_rows;

                            for ($i = 0; $i < $num; $i++) {
                                $d = $rs->fetch_assoc();
                            ?>
                                <option value="<?php echo ($d["product_id"]); ?>"><?php echo ($d["name"]); ?></option>
                            <?php
                            }

                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="">Qty</label>
                        <input class="form-control" type="text" id="qty" />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Unit Price</label>
                        <input type="text" class="form-control" id="uprice">
                    </div style="backdrop-filter: blur(10px);">
                    <div class="mt-1 signUp_Box d-none" id="msgdiv2">
                        <div class="alert alert-danger" id="msg2"></div>
                    </div>


                    <div class="d-grid">
                        <div class="btn btn-outline-primary" onclick="updateStock();">Update Stock</div>
                    </div>

                </div>

            </div>

        </div>

        <!-- footer -->
        <div class="fixed-bottom col-12 text-end">
            <p>&copy; 2024 J & G Store.lk || All Right Reserved</p>
        </div>
        <!-- footer -->
        
        
        <script src="script.js"></script>
    </body>

    </html>

<?php
} else {
    echo ("You're not an admin");
}

?>