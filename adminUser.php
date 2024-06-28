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
    <title>J & G Store - Admin Page</title>
    <link rel="icon" href="th-removebg-preview.ico" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>

  <body class="signIn_Body" onload="loadUser();">

    <!-- navbar -->
    <?php include "adminNavBar.php"; ?>
    <!-- navbar -->

    <div class="blue_Box col-11 col-lg-9 mt-lg-5 mt-5 justify-align-content-center  ">
      <h2 class="text-center" style="color: yellow;">User Management</h2>

      <div class="row d-flex justify-content-end mt-4 col-10 col-lg-12">

        
        <div class="col-4 col-lg-2">
          <input type="text" class="form-control " placeholder="User Id" id="uid" />
        </div>

        <button class="btn btn-outline-light col-4" onclick="updateUserStatus();">Chenge Status</button>
      </div>


      <div class="mt-3 mt-lg-3  ">
        <table class="table table-hover col-12">
          <thead>
            <tr>
              <th scope="col">User Id</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mbile</th>
              <th scope="col">Statuse</th>
            </tr>
          </thead>
          <tbody id="tb">


          </tbody>
        </table>
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