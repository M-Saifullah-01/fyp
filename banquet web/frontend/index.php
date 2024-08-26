<?php
session_start();
include ('../view/layouts/connect.php');


$select = "SELECT * FROM add_hall";
$select_query = mysqli_query($connection, $select);

  ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!--Link for Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!--Link for aos animation-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!--Link for css-->
  <link rel="stylesheet" href="assets/css/style.css">
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

      <video class="background-video" src="assets/img/background-video.mp4" autoplay loop muted
        class="w-100 h-100"></video>
      <div class="bg-clr"></div>
    </div>
    <h1 class="hero-heading text-white text-center" data-aos="zoom-in" data-aos-duration="3000">Let Us Make Your Event Shine:
      <br>Explore Banquet <span class="banquet_vanues">Venues Today!</span>
    </h1>

  </section>

  <section class="plaining py-5 ">
    <div class="container">
      <div class="row">

        <div class="col-6 col-md-6 ">
          <div class="card" data-aos="zoom-in" data-aos-duration="1000">
            <img src="assets/img/background-img2.jpeg" alt="" class="position-relative bg_frst_img" class="w-100" >
            <div class="main-text text-white px-5 py-3 position-absolute">
              <h1 class="mb-4">PLANNINGFROM START TO FINISH</h1>
              <p class="main-text-paragraph">Experience the ease of seamless event planning from start to finish, all in one place. </p>
            </div>
          </div>
        </div>

        <div class="col-6  col-md-6">
          <div class="card" data-aos="zoom-in" data-aos-duration="1000">
            <img src="assets/img/background-img3.jpg" alt="" class="position-relative bg_scd_img">
            <div class="main-text text-white px-5 py-3 position-absolute">
              <h1 class="mb-4">LET THE EXPERTS RUN YOUR WEDDING</h1>
              <p class="main-text-paragraph">Relax and revel in your special day as our seasoned professionals handle every detail.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about pb-5">
    <div class="container pb-5">
      <h1 class="text-center font-weight-bold my-5 pt-5 text-white">About Us</h1>

      <div class="row">
        <div class="col-6 col-md-6">
          <img src="assets/img/about-img.jpg" alt="" class="w-100" data-aos="fade-right" data-aos-duration="1500">
        </div>
        <div class="col-6 col-md-6 imge_div" data-aos="fade-left" data-aos-duration="1500">
          <h2 class=" mb-4 text-white">Marry Banquet</h2>
          <p class="text-white">Welcome to Marry Banquet, where elegance meets excellence. Our luxurious venue sets the
            stage for your
            unforgettable celebration, whether it's a wedding, anniversary, or any special occasion. Let us weave magic
            into every detail, ensuring your event is nothing short of spectacular.</p>
        </div>
      </div>
    </div>
  </section>

 
  <section class="hall" id="our-services">
        <div class="container">
            <div class="card mt-5 border-0">
                <div class="card-header bg-transparent border-0 text-center ">
                <h1>Our Services</h1>    
                <p>Book Your Favourite Hall</p>

                </div>
                <div class="card-body">
                    <div class="row">
                        <?php while ($data = $select_query->fetch_assoc()) { ?>
                            <div class="col-6 col-md-4 mb-4">
                                <div class="card">
                                    <div class="card-header  p-0" >
                                        <img height="100%" width="100%"
                                            src="<?php echo "../backend/admin/assets/img/" . $data['image']; ?>" class="card-img-top"
                                            alt="Hall Image is not available"
                                            style="object-fit: cover;     background-position: center; ">
                                    </div>
                                    <div class="card-body" style="height: 140px;">
                                        <h5 class="card-title text-center"><?php echo $data['name']; ?></h5>
                                        <p class="card-text sub-p">
                                            <strong>Hall No:</strong> <?php echo $data['hall_no']; ?><br>
                                            <strong>Capacity:</strong> <?php echo $data['capacity']; ?><br>
                                            <strong>Floor:</strong> <?php echo $data['floor']; ?><br>
                                        </p>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a class="hall-book-btn btn text-white"
                                            href="hall-detail.php?hall_id=<?php echo $data['hall_id']; ?>">Book
                                            Now</a>
                                    </div> 
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section class="message pt-3">
    <div class="container py-4">
      <h2 class="text-white text-center font-weight-bold mb-5">Message</h2>

      <div class="row text-white">
        <div class="col-md-6">
          <h2>Get In Touch</h2>
          <p>We are Ready to turn your event dreams into reality? Contact us today and let's begin planning the
            extraordinary together.</p>
        </div>
        <div class="col-md-6">
          <h3>Send us a Message</h3>
          <form action="https://api.web3forms.com/submit" method="POST">
            <input type="hidden" name="access_key" value="180acd5c-25e6-436a-841d-a15e951ec14c">
            <input type="text" name="name" required placeholder="Enter Your Name" class="form-control my-4">
            <input type="email" name="email" required placeholder="Enter Your Email" class="form-control mb-4">
            <textarea name="message" rows="5" cols="30" placeholder="Message" class="form-control"></textarea>
            <button type="submit" class="text-white rounded px-4 py-2 mt-4">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="location mt-4 py-5 ">
    <div class="container">
      <h2 class="text-center mb-4">Location</h2>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d867.743919143008!2d71.64826004096639!3d29.546204735343146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b9ff519765187%3A0x3261f420e496ddb4!2sMarry%20Banquet!5e0!3m2!1sen!2s!4v1715842276146!5m2!1sen!2s"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
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
  <!--Link for bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
</body>

</html>