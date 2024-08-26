<?php
session_start();
include ("../../view/layouts/connect.php");

$filter = isset($_GET['filter']) ? $_GET['filter'] : '';
if ($filter) {
  $select = "SELECT * FROM cancel_booking  WHERE person_name LIKE'%$filter%' OR Booking_No LIKE'%$filter%' OR cnic LIKE'$filter' OR pkg_name LIKE'%$filter%'";
  $select_query = mysqli_query($connection, $select);
} else {
  $select = "SELECT * FROM cancel_booking";
  $select_query = mysqli_query($connection, $select);
}

// var_dump($connection);
// die(""); 

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
  <link rel="stylesheet" href="assets/css/cancel-booking.css">
  <!--font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
      <!--Link for favicon-->
      <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
  <title>Marry Banquet</title>
</head>

<body>
  <?php
  // include ("../../view/layouts/adminsidebar.php");
  ?>
   <?php include ("../../view/layouts/admin-navbar.php") ?>



  <section class="new_booking mt-3" style="margin-left: 0px; ">
    <div class="">
      <div class="card ">
        <div class="card-header d-flex align-items-center justify-content-between">
          <span class="d-flex align-items-center ml-3">
            <a href="index.php" style="font-size: 30px;"><i class="fa-solid fa-arrow-left"></i></a>
            <h3 class="ml-5">Cancelled Bookings</h3>

          </span>
          <!-- <a href="index.php" class="back-btn btn text-white border-rounded mr-5 px-3" style="background-color: #676b70;">Back</a> -->

          <form action="" class="d-flex align-items-center">
            <input type="text" name="filter" class="form-control">
            <button class="btn btn-primary ml-1" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <a href="cancel-bookings.php" class="btn btn-success ml-1"><i class="fa-solid fa-house"></i></a>
          </form>
        </div>

        <div class="card-body  ">
          <div class="table-responsive" style="overflow-x: auto;">
            <table class="table table-bordered ">
              <tr>
                <th class="text-center" width="5%">Booking No</th>
                <th class="text-center">person name</th>
                <th class="text-center">phone number</th>
                <th class="text-center">cnic</th>
                <th class="text-center">booking date</th>
                <th class="text-center">Booking time</th>
                <th class="text-center">address</th>
                <th class="text-center">Hall Name</th>
                <th class="text-center">Hall No</th>
                  <th class="text-center">people</th>
                  <th class="text-center">Per Head Price</th>
                  <th class="text-center">Bill</th>
                  <th class="text-center">Menu</th> 
                  <th class="text-center">Custom Menu</th> 
                <th class="text-center">User_id</th>
                <!-- <th>Action</th> -->
              </tr>
              <?php while ($data = $select_query->fetch_assoc()) { ?>
                <tr>
                <td> <?php echo $data['Booking_No'] ?></td>
                  <td> <?php echo $data['person_name'] ?></td>
                  <td> <?php echo $data['phone_number'] ?></td>
                  <td> <?php echo $data['cnic'] ?></td>
                  <td> <?php echo $data['booking_date'] ?></td>
                  <td> <?php echo $data['Booking_time'] ?></td>
                  <td> <?php echo $data['address'] ?></td>
                  <td> <?php echo $data['hall_name'] ?></td>
                    <td> <?php echo $data['hall_no'] ?></td>
                    <td> <?php echo $data['capacity'] ?></td>
                    <td> <?php echo $data['headprice'] ?></td>
                    <td><?php echo $data['capacity'] * $data['headprice']; ?></td>
                    <td> <?php echo $data['menu_name'] ?></td>
                    <td> <?php echo $data['custom_menu'] ?></td>
                  <td> <?php echo $data['user_id'] ?></td>
                
                </tr>

              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- confirm and cancel button js -->
  <script>
    // confirm Button sweet alert js
    document.querySelectorAll('.confirm-button').forEach(button => {
      button.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default action
        const href = this.getAttribute('href');
        Swal.fire({
          title: "Are You Sure?",
          text: "Do you really want to Confirm the New Booking?",
          icon: "question",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, Confirm it!",
          cancelButtonText: "No"
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = href; // Proceed with deletion
          }
        });
      });
    });


    // Cancel Button sweet alert js
    document.querySelectorAll('.cancel-button').forEach(button => {
      button.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent the default action
        const href = this.getAttribute('href');
        Swal.fire({
          title: "Are You Sure?",
          text: "Do you really want to Cancel the New Booking?",
          icon: "question",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, Cancel it!",
          cancelButtonText: "No"
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = href; // Proceed with deletion
          }
        });
      });
    });
  </script>


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