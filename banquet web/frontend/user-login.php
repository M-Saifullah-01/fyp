<?php
session_start();
include('../view/layouts/connect.php');

$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $select = "SELECT * FROM user_registration WHERE email = '$email' AND password = '$password'";
  $select_query = mysqli_query($connection, $select);
  // var_dump($select_query);
// die('');
  if ($select_query->num_rows > 0) {
    $data = $select_query->fetch_assoc();
    $_SESSION['user_name'] = $data['username'];
    $_SESSION['user_id'] = $data['user_id'];

    header('location: index.php');
    exit();
  } else {
    $_SESSION['login_error'] = 1;
    header('location: user-login.php');
    exit();
  }
}

// $user_id = isset($_SESSION['user$user_id'])?$_SESSION['user$user_id']: null;
$login_error = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : null;

unset($_SESSION['login_error']);
// unset($_SESSION['user_name']);



?>
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
  <link rel="stylesheet" href="assets/css/user-login.css">
  <!--Link for favicon-->
  <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
  <title>Marry Banquet Booking</title>
</head>

<body>
  <?php
  include("../view/layouts/user-header.php");
  ?>
  <section class="hero ">
    <div class="bg-video">
      <video src="assets/img/background-video.mp4" autoplay muted loop></video>
      <div class="bg-clr">
        <h1 class="text-center">User Login</h1>
      </div>
    </div>
  </section>


  <section class="login">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/img/about-img.jpg" alt="" class="w-100">
        </div>
        <div class="col-md-6">
          <form action="" method="post">
            <h2 class="px-5 mb-5">Login to User Panel</h2>
            <div class="form px-5">
              <input type="email" name="email" id="email" class="form-control mb-4" placeholder="Email"
                title="Please Enter a valid Email" Required>
              <?php if ($login_error) { ?>
                <strong class="text-danger error-msg">Invalid email or password</strong>
              <?php } ?>
              <input type="password" name="password" id="password" class="form-control mb-4" placeholder="Password"
                title="Please Enter a valid password" Required>
              <button class="btn-login text-white px-4 py-2 font-weight-bold">Login Now</button> <br>
              <div class="register mt-2">
                <p>New Here <a href="user-register.php">Register Yourself!</a></p>
                <a href="forgot.php">Forgot Password!</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php
  include("../view/layouts/footer.php");
  ?>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>