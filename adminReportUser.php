<?php

session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

    $rs = Database::search("SELECT * FROM `user` 
                            INNER JOIN `user_type` 
                             ON `user`.user_type_id = `user_type`.u_id 
                            ORDER BY `user`.user_type_id ASC");
    $num = $rs->num_rows;
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
        <title>User Report</title>
        <link rel="icon" href="th-removebg-preview.ico" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>

    <body class="arb row">
        <div class="container mt-3">
            <a href="adminReport.php"><img src="1-removebg-preview.ico " style="width: 100px; cursor: pointer;"></a>
        </div>

        <div>
            <div class="container col-12 col-lg-10 mt- mt-lg-5 blue_Box">
                <h2 class="text-center " style="color: blue;">Product Report</h2>
                <table class="table table-hover mt-5 ">

                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>User type</th>
                            <th>Status</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        for ($i = 0; $i < $num; $i++) {
                            $d = $rs->fetch_assoc();
                        ?>
                            <tr>
                                <td><?php echo $d["user_id"] ?></td>
                                <td><?php echo $d["fname"] ?></td>
                                <td><?php echo $d["lname"] ?></td>
                                <td><?php echo $d["email"] ?></td>
                                <td><?php echo $d["mobile"] ?></td>
                                <td><?php echo $d["user_type_id"] ?></td>
                                <td><?php
                                    if ($d["status"] == 1) {
                                        echo ("Active");
                                    } else {
                                        echo ("Inactive");
                                    }
                                    ?></td>
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
        <div class="fixed-bottom col-12 " style="color: blanchedalmond;">
            <p> 2024 J & G Store.lk || All Right Reserved</p>
        </div>
        <!-- footer -->


        <script src="script.js"></script>
        <script src="bootstrap.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>

    </html>


<?php
} else {
    echo ("You are not a Valid Admin");
}
?>