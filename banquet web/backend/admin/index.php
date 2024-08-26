<?php
session_start();
include("../../view/layouts/connect.php");
if(!$_SESSION['admin_email']){
  header('location: ../../frontend/admin-login.php');
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!--Link with css-->
  <link rel="stylesheet" href="assets/css/style.css">
  <!--font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
      <!--Link for favicon-->
      <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
  <title>Marry Banquet</title>
</head>

<body>
  <?php
  include ("../../view/layouts/adminsidebar.php");
  ?>

<?php include("../../view/layouts/admin-navbar.php") ?>





  <section class="content mt-5">
    <div class="container">
      <div class="row ">
        <div class="col-4 col-md-4">
          <a href="new-booking.php" class="text-white text-center text-decoration-none">
            <div class="card d-flex justify-content-center align-items-center ">
              <div class="card-header bg-transparent border-0 "><i class="fa-solid fa-pencil"></i></div>
              <div class="card-body">New Bookings</div>
            </div>
          </a>
        </div>
        <div class="col-4 col-md-4">
          <a href="confirm-booking.php" class="text-white text-center text-decoration-none">

            <div class="card d-flex justify-content-center align-items-center ">
              <div class="card-header bg-transparent border-0"><i class="fa-regular fa-face-smile"></i></div>
              <div class="card-body">Confirm Bookings</div>
            </div>
          </a>
        </div>
        <div class="col-4 col-md-4">
          <a href="cancel-bookings.php" class="text-white text-center text-decoration-none">
            <div class="card d-flex justify-content-center align-items-center ">
              <div class="card-header bg-transparent border-0"><i class="fa-solid fa-ban"></i></div>
              <div class="card-body">Cancelled Bookings</div>
            </div>
          </a>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-6 col">
          <a href="todays-booking.php" class="text-white text-center text-decoration-none">
            <div class="card d-flex justify-content-center align-items-center ">
              <div class="card-header bg-transparent border-0"><i class="fa-regular fa-calendar-check"></i></div>
              <div class="card-body">Todays Booking</div>
            </div>
          </a>
        </div>

        <div class="col-6 col">
          <a href="total-booking.php" class="text-white text-center text-decoration-none">
            <div class="card d-flex justify-content-center align-items-center ">
              <div class="card-header bg-transparent border-0"><i class="fa-solid fa-book"></i></div>
              <div class="card-body">Total Bookings Requests</div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>



  <!--Logout Button Sweet alert JS-->
  <script>
    document.getElementById('logoutBtn').addEventListener('click', function () {
      Swal.fire({
        title: "Are you want to logout?",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, logout!",
        cancelButtonText: "No"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Logged out!",
            text: "You have been Successfully logged out.",
            icon: "success"
          }).then(() => {
            window.location.href = "../../frontend/index.php";
          });
        }
      });
    });
  </script>






<!-- JS for admin sidebar -->

<script>

document.getElementById('menu-toggle').addEventListener('click', function() {
        var sidebar = document.querySelector('.admin_sidebar');
        sidebar.classList.toggle('active');
    });

</script>

  <!-- sweet alert link -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>