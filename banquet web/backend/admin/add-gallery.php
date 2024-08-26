<?php
session_start(); 

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
  <link rel="stylesheet" href="assets/css/add-gallery.css">
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
    <?php include ("../../view/layouts/admin-navbar.php") ?>


    <section class="booking mt-3">
        <div class="container">
            <div class="card mb-5">
                <div class="card-header d-flex align-items-center justify-content-between ">
                    <h3>Add Photo in Gallery</h3>
                    <a class="btn text-white  px-3" href="manage-gallery.php" style="background-color: #343a40bf;">Manage Gallery</a>
                </div>
                <div class="card-body">
                    <form action="add-gallery-insert.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Image</label>
                                    <input type="file" name="image" id="" class="form-control" Required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="">About</label>
                                    <input type="text" name="about" id="" class="form-control" Required>
                                </div>
                            </div>
                        <button type="submit" class="btn text-white px-3 mt-3"
                            style="background-color: #343a40bf;">Add</button>
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