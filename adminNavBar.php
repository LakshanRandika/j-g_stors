<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<body >
    
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" >
    <div class="container" >
        <a style="color: blueviolet;" class="navbar-brand h1 mb-0" href="adminDashboard.php">
        <img  src="1-removebg-preview.ico" height="45" >    
        J & G Admin Dashboard</a>

        <button  class="navbar-toggler col-2 col-lg-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-5">

            <li class="nav-item me-5 ">
                <a style="color: blueviolet;" class="nav-link active" aria-current="page" href="adminUser.php" class="text text-white text-decoration-none h6">User Management</a>
            </li>

            <li class="nav-item me-5">
                <a style="color: blueviolet;" class="nav-link active" aria-current="page" href="adminproduct.php" class="text text-white text-decoration-none h6" >Product Management</a>
            </li>

            <li class="nav-item me-5">
                <a style="color: blueviolet;" class="nav-link active" aria-current="page" href="adminStock.php" class="text text-white text-decoration-none h6">Stock Management</a>
            </li>

            <li class="nav-item">
                <a style="color: blueviolet;" class="nav-link active" aria-current="page" href="adminReport.php" class="text text-white text-decoration-none h6">Reports</a>
            </li>
            

        <!-- 
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li> 
        -->

        </ul>

        <!-- 
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form> 
        -->

        </div>
    </div>
    </nav>

    <!-- navbar -->

</body>
</html>