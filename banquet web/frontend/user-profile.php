<?php
session_start();
include("../view/layouts/connect.php");

$user_id = isset($_SESSION['user_id'])?$_SESSION['user_id']: null;

// var_dump($user_id);
// die();
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
  <link rel="stylesheet" href="assets/css/profile.css">
    <!--Link for aos animation-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <!--Link for favicon-->
  <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
  <title>Marry Banquet Booking</title>
</head>

<body>
<?php
  include ("../view/layouts/user-header.php");
  ?> 

<section class="profile pb-4">
    <div class="container">
        <div class="card">
            <div class="card-header ">
                <h3>Update Profile</h3>
            </div>
            <div class="card-body">
                <form action="../backend/admin/user-profile-update.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                        <input type="text" name="user_id" value="<?php echo $user_id; ?>" class="form-control" hidden>
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" pattern="[A-Za-z0-9]+" title="Username contain only letters" Required >
                        </div>
                        <div class="col-md-6">    
                            <label for="">Phone</label>
                            <input type="tel" name="phone" class="form-control" pattern="[0-9]+" title="Phone number contain only numbers." required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control"  title="email contain '@'"  required>
                        </div>
                        <div class="col-md-6">    
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</section>
 <?php
  include ("../view/layouts/footer.php");
 ?>










  <!--Link for aos animation JS-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>