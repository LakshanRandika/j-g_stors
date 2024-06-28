<?php

session_start();
include "connection.php";

$user = $_SESSION["u"];

if (isset($user)) {

?>

    <!DOCTYPE html>
    <html lang="en" data-bs-theme="dark">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <title>J & G Store</title>
        <link rel="icon" href="th-removebg-preview.ico" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    </head>

    <body class="arb" style="color: orange;" onload="loadCart();">

        <!-- Navbar -->
        <?php include "navBar.php"; ?>
        <!-- Navbar -->
        <br><br>
        <div class="container" >
            <div class="row" id="cartBody">

            
            
            </div>
        </div>

        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>

<?php

} else {
    header("location: signin.php");
}


?>