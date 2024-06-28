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
        <title>J & G Store Product Maneigment</title>
        <link rel="icon" href="th-removebg-preview.ico" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>

    <body class="adminBody">

        <!-- navbar -->
        <?php include "adminNavBar.php"; ?>
        <!-- navbar -->

        <div class="blue_Box col-10 col-lg-7 mt-lg-5 mt-5">
            <h1 class="text-center">Product Maneigment</h1>

            <div class="row mt-4">
                <!-- Brandregishter -->
                <div class="col-4 offset-1 mt-lg-5">
                    <label for="form-label">Brand Name</label>
                    <input type="text" class="form-control mb-3" id="brand" />

                    <div class="d-none" id="msgDive1">
                        <div class="aert alert-danger" id="msg1"></div>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-outline-light col-12" onclick="brandregister();">Brand Regishter</button>
                    </div>
                </div>

                <!-- Brandregishter -->

                <!-- catagery -->
                <div class="col-4 offset-1 mt-lg-5">
                    <label for="form-label">Catagary</label>
                    <input type="text" class="form-control mb-3" id="cat" />

                    <div class="d-none" id="msgDive2">
                        <div class="aelert alert-danger" id="msg2"></div>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-outline-light col-12" onclick="catagery();">Catagary register</button>
                    </div>
                </div>
                <!-- catagery -->

                <div class="row mt-5">
                    <!-- color -->
                    <div class="col-4 offset-1 mt-lg-5">
                        <label for="form-label">Color</label>
                        <input type="text" class="form-control mb-3" id="color" />

                        <div class="d-none" id="msgDive3">
                            <div class="aelert alert-danger" id="msg3"></div>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-outline-light col-12" onclick="color();">Color Register</button>
                        </div>
                    </div>

                    <!-- color -->
                    <!-- Sizee -->
                    <div class="col-4 offset-1 mt-lg-5">
                        <label for="form-label">Size</label>
                        <input type="text" class="form-control mb-3" id="size" />

                        <div class="d-none" id="msgDive4">
                            <div class="aelert alert-danger" id="msg4"></div>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-outline-light col-12" onclick="size();">Size Register</button>
                        </div>
                    </div>

                    <!-- Size -->


                    <div>

                    </div>

                </div>


            </div>




        </div>
        <!-- footer -->
        <div class="fixed-bottom col-12">
            <p>&copy; 2024 J & G Store.lk || All Right Reserved</p>
        </div>
        <!-- footer -->



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="script.js"></script>
    </body>

    </html>

<?php

} else {
    echo ("You are not a Valid Admin");
}

?>