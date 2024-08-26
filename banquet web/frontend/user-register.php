<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


  <link rel="stylesheet" href="assets/css/user-register.css">
  <!--Link for favicon-->
  <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
  <title>Marry Banquet Booking</title>
</head>

<body>
  <?php
  include ("../view/layouts/user-header.php");
  ?>

  <section class="hero ">
    <div class="bg-video">
      <video src="assets/img/background-video.mp4" autoplay muted loop></video>
      <div class="bg-clr">
        <h1 class="text-center">User Registration</h1>
      </div>
    </div>
  </section>

   <section class="register">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/img/about-img.jpg" alt="" class="w-100">
        </div>
        <div class="col-md-6">
          <form action="../backend/admin/user-register-insert.php" method="post">
            <h2 class="px-5 mb-3">Register Yourself</h2>
            <div class="form px-5">
              <input type="text" name="username" id=""  class="form-control mb-4" placeholder="Full Name"  pattern="[A-Za-z]+" title="Username contain only letters and numbers" Required>
              <input type="tel" name="phone" id="" class="form-control mb-4" placeholder="Phone No."  pattern="[0-9]+" title="Phone number contain only numbers." Required>
              <input type="email" name="email" id="" class="form-control mb-4" placeholder="E-mail" title="email contain '@'"  Required>
              <input type="password" name="password" id="" class="form-control mb-4" placeholder="Password" Required>
              <button class="btn_register px-4 py-2 font-weight-bold text-white ">Register</button> <br>
              <div class="register mt-2">
                <p>Already Have Account <a href="user-login.php">Login!</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> 


  
  <?php
    include ("../view/layouts/footer.php");
  ?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>
</html>