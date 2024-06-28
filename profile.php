<?php

include "connection.php";
session_start();
$user = $_SESSION["u"];

if (isset($_SESSION["u"])) {

    $rs = Database::search("SELECT * FROM `user` WHERE `user_id` = '" . $user["user_id"] . "'");
    $d = $rs->fetch_assoc();

?>
    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css" />
        <titleJ & G Store</title>
            <link rel="icon" href="th-removebg-preview.ico"   />
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>

    <body class="arb d-flex justify-content-center">
        <div class="col-12 col-lg-12">
            <?php include "navBar.php" ?>
        </div><br><br>


        <div class=" mt-5 ">
            <div class="row container blue_Box d-flex justify-items-center">
                <div class="col-4 d-flex justify-content-center flex-column">
                    <div class="d-flex justify-content-center">
                        <img src="<?php
                                    if (!empty($d["img_path"])) {
                                        echo $d["img_path"];
                                    } else {
                                        echo ("Resources\profile\profile.png");
                                    }
                                    ?>" height="150px">
                    </div>
                    <div class="mt-2">
                        <label for="from-label">Prifile Image</label>
                        <input type="file" class="form-control" id="imgUploader" />
                    </div>
                    <div>
                        <button class="btn btn-outline-warning col-12 mt-3" onclick="uploadImg();">Upload</button>
                    </div>
                </div>
                <div class="col-8">
                    <h2 class="text-center">Profile Details</h2>

                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="form-label">First Name</label>
                            <input type="text" class="form-control" value="<?php echo $d["fname"] ?>" id="fname" />
                        </div>
                        <div class="col-6">
                            <label for="form-label">Last Name</label>
                            <input type="text" class="form-control" value="<?php echo $d["lname"] ?>" id="lname" />
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="mt-2 col-6"">
                            <label for=" form-label">Email</label>
                            <input type="text" class="form-control" value="<?php echo $d["email"] ?>" id="email">
                        </div>
                        <div class="mt-2 col-6"">
                            <label for=" form-label">Password</label>
                            <input type="password" class="form-control" value="<?php echo $d["password"] ?>" id="pw">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class=" col-6">
                            <label for="form-label">Mobile</label>
                            <input type="text" class="form-control" value="<?php echo $d["mobile"] ?>" id="mobile">
                        </div>
                        <div class=" col-6">
                            <label for="form-label">Username</label>
                            <input type="text" class="form-control" value="<?php echo $d["username"] ?>" disabled>
                        </div>
                    </div>

                    <h5 class="mt-2">Shipping Address</h5>

                    <div class="row mt-2">
                        <div class="col-3">
                            <label for="form-label">No:</label>
                            <input type="text" class="form-control" value="<?php echo $d["no"] ?>" id="no">
                        </div>
                        <div class="col-9">
                            <label for="form-label">Line 01:</label>
                            <input type="text" class="form-control" value="<?php echo $d["line_1"] ?>" id="line1">
                        </div>
                        <div class="col-12">
                            <label for="form-label">Line 02:</label>
                            <input type="text" class="form-control" value="<?php echo $d["line_2"] ?>" id="line2">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="mt-3 col-6 ">
                            <button class="btn btn-outline-warning col-12 " onclick="updateData();">Update</button>
                        </div>
                        <div class="mt-3 col-6 ">
                            <button class="btn btn-outline-warning col-12 " onclick="signOut();">Sign Out</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>




        <!-- footer -->

        <div class="fixed-bottom col-12">
            <p> 2024 J & G Store.lk </p>
        </div>
        <!-- footer -->





        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
<?php
} else {
    header("location: signIn.php");
}

?>