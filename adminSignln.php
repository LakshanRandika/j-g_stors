<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <Link rel="stylesheet" href="bootstrap.css" />
    <title>J & G Store</title>
    <link rel="icon" href="th-removebg-preview.ico" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="signinboody  ">

    <div class="adminlogin col-10 col-lg-4">
        <h1 class="adminh1">Admin Login</h1>

        <div class="mt3">
            <label for="form-label">Username</label>
            <input type="text" class="form-control border-black" placeholder=" ex: ********" id="un" />
        </div>

        <div class="mt-3 mt-3">
            <label for="form-label">Password</label>
            <input type="password" class="form-control border-black " placeholder=" ex: ********" id="pw" />
        </div>

        <div class="d-none" id="msgDiv">
            <div class="alert alert-danger" id="msg"></div>
        </div>

        <div class="mt-3">
            <button class="btn btn-danger" onclick="adminSignIn();">Sign In</button>
        </div>
        <!-- footer -->
    <div class="fixed-bottom col-12">
        <p> 2024 J & G Store.lk </p>
    </div>
    <!-- footer -->
    </div>

    



    <script src="script.js"></script>
</body>

</html>