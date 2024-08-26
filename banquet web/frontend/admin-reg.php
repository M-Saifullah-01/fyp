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
  <!-- css link -->
  <link rel="stylesheet" href="assets/css/admin-reg.css">

  <!-- Link for aos animation -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


  <!--Link for favicon-->
  <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
  <title>Marry Banquet Booking</title>
</head>

<body>
  <section class="admin">
    <div class="bg-img overflow-hidden">
      <div class="bg-clr">
        <form action="../backend/admin/admin_reg_insert.php" method="post" class=" form px-5 " data-aos="slide-left"
          data-aos-duration="1500">
          <h2 class="font-weight-bold text-primary ">Marray Banquet</h2>
          <h5 class="font-weight-bold mt-3">Welcome To Admin Registration</h5>

          <label for="username" class="mt-3">Username</label>
          <input type="text" class="form-control" name="username" placeholder="username" id="username"
            pattern="[A-Za-z0-9]+" title="Username contain only letters and numbers" Required>
          <label for="phone" class="mt-3">Phone no.</label>
          <input type="text" class="form-control" name="phone" placeholder="Enter Phone no." id="username"
            pattern="[0-9]+" title="Phone number contain only numbers." required>


          <label for="email" class="mt-3 ml-0">Email</label>
          <input type="text" class="form-control" name="email" placeholder="Enter Email" id="email"
            title="email contain '@'" required>
          <label for="password" class="mt-3">Password</label>
          <input type="password" class="form-control" name="password" placeholder="password" id="password" required>
          <button class="rounded py-2 px-4 mt-3 text-white">Register</button>

        </form>
      </div>
    </div>
  </section>



  <!--Link for aos animation JS-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
  <!-- link for sweet atert 2(alert animation) -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>