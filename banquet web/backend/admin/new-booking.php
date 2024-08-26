<?php
session_start();
include ("../../view/layouts/connect.php");


  // $select = "SELECT Booking_No, person_name, phone_number, cnic, booking_date, Booking_time, address,  add_hall.name as pkg_name ,new_booking.headprice as headprice, add_hall.hall_id as hall_id, add_menu.name as menu_name, add_menu.menu_id as menu_id, user_id FROM new_booking INNER JOIN add_hall ON new_booking.hall_id = add_hall.hall_id INNER JOIN add_menu ON new_booking.menu_id = add_menu.menu_id";
  $select = "SELECT Booking_No, person_name, phone_number, cnic, booking_date, Booking_time, address, custom_menu, new_booking.name as hall_name, hall_no, capacity ,new_booking.headprice as headprice,  add_menu.name as menu_name, add_menu.menu_id as menu_id, user_id FROM new_booking INNER JOIN  add_menu ON new_booking.menu_id = add_menu.menu_id";
  $select_query = mysqli_query($connection, $select);


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
  <link rel="stylesheet" href="assets/css/new-booking.css">
  <!--font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
      <!--Link for favicon-->
      <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
  <title>Marry Banquet</title>
</head>

<body>
 

  <?php include ("../../view/layouts/admin-navbar.php") ?>



  <section class="new_booking mt-3" style="margin-left: 0px;">
    <div class="">
      <div class="card ">
        <div class="card-header d-flex align-items-center justify-content-between">
          <span class="d-flex align-items-center ml-3">
            <a href="index.php" style="font-size: 30px;"><i class="fa-solid fa-arrow-left"></i></a>
            <h3 class="ml-5">New Booking</h3>

          </span>
          <!-- <a href="index.php" class="back-btn btn text-white border-rounded mr-5 px-3" style="background-color: #676b70;">Back</a> -->

          
        </div>

        <div class="card-body  ">
          <form action="confirm-booking-insert.php" method="post">
            <div class="table-responsive" style="overflow-x: auto;">


              <table class="table table-bordered ">
                <tr>
                  <th width="5%">Booking No</th>
                  <th>person name</th>
                  <th>phone number</th>
                  <th>cnic</th>
                  <th>booking date</th>
                  <th>Booking time</th>
                  <th>address</th>
                  <th>Hall Name</th>
                  <th>Hall No</th>
                  <th>Chairs</th>
                  <th>Per Head Price</th>
                  <th>Bill</th>
                  <th>Menu</th>
                  <th>Custom Menu</th>
                  <th>user_id</th>
                  <th>Action</th>
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
                    <td class=" text-center">
                    <a class="btn btn-primary confirm-button" href="confirm-booking-insert.php?Booking_No=<?php echo urlencode($data['Booking_No']); ?>&person_name=<?php echo urlencode($data['person_name']); ?>&phone_number=<?php echo urlencode($data['phone_number']); ?>&cnic=<?php echo urlencode($data['cnic']); ?>&booking_date=<?php echo urlencode($data['booking_date']); ?>&Booking_time=<?php echo urlencode($data['Booking_time']); ?>&address=<?php echo urlencode($data['address']); ?>&custom_menu=<?php echo urlencode($data['custom_menu']); ?>&hall_name=<?php echo urlencode($data['hall_name']); ?>&hall_no=<?php echo urlencode($data['hall_no']); ?>&capacity=<?php echo urlencode($data['capacity']); ?>&headprice=<?php echo urlencode($data['headprice']); ?>&bill=<?php echo urlencode($data['capacity'] * $data['headprice']); ?>&menu_name=<?php echo urlencode($data['menu_name']); ?>&user_id=<?php echo urlencode($data['user_id']); ?>">
                    <i class="fa-solid fa-check"></i>
</a>
                        <br>

                        <a class="btn btn-danger mt-2 cancel-button" href="cancel-bookings-insert.php?Booking_No=<?php echo urlencode($data['Booking_No']); ?>&person_name=<?php echo urlencode($data['person_name']); ?>&phone_number=<?php echo urlencode($data['phone_number']); ?>&cnic=<?php echo urlencode($data['cnic']); ?>&booking_date=<?php echo urlencode($data['booking_date']); ?>&Booking_time=<?php echo urlencode($data['Booking_time']); ?>&address=<?php echo urlencode($data['address']); ?>&custom_menu=<?php echo urlencode($data['custom_menu']); ?>&hall_name=<?php echo urlencode($data['hall_name']); ?>&hall_no=<?php echo urlencode($data['hall_no']); ?>&capacity=<?php echo urlencode($data['capacity']); ?>&headprice=<?php echo urlencode($data['headprice']); ?>&bill=<?php echo urlencode($data['capacity'] * $data['headprice']); ?>&menu_name=<?php echo urlencode($data['menu_name']); ?>&user_id=<?php echo urlencode($data['user_id']); ?>">
                        <i class="fa-solid fa-xmark"></i>
</a>  <br>

                      <a href="new-booking-edit.php?Booking_No=<?php echo $data['Booking_No'] ?>&menu_name=<?php echo urlencode($data['menu_name']); ?>"
                        class="btn btn-success mt-2"><i class="fa-regular fa-pen-to-square"></i></a>

                    </td>
                  </tr>

                <?php } ?>
              </table>
            </div>


          </form>
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