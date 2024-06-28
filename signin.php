<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <Link rel="stylesheet" href="bootstrap.css" />
    <title>J & G Store</title>
    <link rel="icon" href="th-removebg-preview.ico" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="signIn_Body">


    <!-- Sign In Box -->
    <div id="signInBox" class="signIn_Box col-10 col-lg-4 ">

        <h2 class="text-center">
            <div style="color: yellow;">Sign In</div>
            <img src="th-removebg-preview.ico" />
        </h2>

        <div class="mt-3">
            <label for="form-label">Username</label>
            <input type="text" class="form-control" id="un" />
        </div>

        <div class="mt-2">
            <label for="form-label">Password</label>
            <input type="password" class="form-control" id="pw" />
        </div>

        <div class="row">
            <div class="mt-3 col-5"">
                <input type="checkbox" class="form-check-input" id="rm" />
            <label for="form-label">Remember Me</label>
        </div>
        <div class="mt-3 col-6 ">
            <input type="checkbox" class="form-check-input" />
            <label for="form-label">Frogot Password</label>
        </div>
    </div>

    <div class="mt-2 d-none" id="msgdiv2">
        <div class="alert alert-danger" id="msg2"></div>
    </div>

    <div class="mt-3">
        <button class="btn btn-secondary col-12" onclick="signIn();">Sign In</button>
    </div>

    <div class="mt-3">
        <button class="btn btn-btn-outline-light col-12" onclick="signInBox();">Create A New Account</button>
    </div>
    </div>
    <!-- Sign In Box -->

    <!-- Sign Up Box -->
    <div class="signUp_Box d-none  " id="signUpBox">


        <h2 class="text-center" style="color: blue;">
            
            <img src="th-removebg-preview.ico  " />
            Sign Up

        </h2>


        <div class="row">
            <div class="mt-2 col-6">
                <label for="form-label">First name</label>
                <input type="text" class="form-control" id="fname" />
            </div>
            <div class="mt-2 col-6">
                <label for="form-label">Last name</label>
                <input type="text" class="form-control" id="lname" />
            </div>
        </div>

        <div class="mt-2">
            <label for="form-label">Username</label>
            <input type="text" class="form-control" id="username" />
        </div>

        <div class="mt-2">
            <label for="form-label">Email</label>
            <input type="email" class="form-control" id="email" />
        </div>

        <div class="mt-2">
            <label for="form-label">Password</label>
            <input type="password" class="form-control" id="password" />
        </div>

        <div class="mt-2">
            <label for="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile" />
        </div>

        <div class="mt-2 signUp_Box d-none" id="msgdiv">
            <div class="alert alert-danger" id="msg3"></div>
        </div>

        <div class="row">
            <div class="mt-2 col-6">
                <button class="btn btn-secondary col-12" onclick="signUp();">Sign Up</button>
            </div>

            <div class="mt-2 col-6">
                <button class="btn btn-btn-outline-light col-12" onclick="signInBox();">Go To Sign In</button>
            </div>
        </div>

    </div>
    <!-- Sign Up Box -->

    <!-- footer -->
    <div class="fixed-bottom col-12">
        <p> 2024 J & G Store.lk </p>
    </div>
    <!-- footer -->
    <script src="script.js"></script>
</body>

</html>