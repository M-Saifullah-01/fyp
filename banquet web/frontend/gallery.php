<?php
session_start();
include ("../view/layouts/connect.php");

$select = "SELECT * FROM gallery";
$select_query = mysqli_query($connection, $select);
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
  <link rel="stylesheet" href="assets/css/gallery.css">
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

  <section class="hero ">
    <div class="bg-video">
      <video src="assets/img/background-video.mp4" autoplay muted loop></video>
      <div class="bg-clr">
        <h1 class="text-center">Our Gallery</h1>
      </div>
    </div>
  </section>


  <section class="gallery mt-5">
    <div class="container">
      <div class="card mb-5 border-0">

        <div class="card-body">

          <div class="row">
            <?php while ($data = $select_query->fetch_assoc()) { ?>
              <div class="col-6 col-md-2 mb-3" data-aos="fade-up" data-aos-duration="1500">
                <a target="_blank" href="<?php echo "../view/upload/" . $data['image'] ?>">
                  <img height="300px" src="<?php echo "../view/upload/" . $data['image'] ?>" class="card-img-top" alt="">
                </a>
                <div class="row">
                  <div class="col-md-12 text-center mt-2">
                    <p><?php echo $data['about'] ?></p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
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