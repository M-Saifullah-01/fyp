<style>
  /*navbar*/
  .navbar {
    /* position: absolute; */
    z-index: 1;
    height: 80px;
    width: 100%;
    background-color: #343a40bf;
  }

  .navbar .navbar-brand {
    font-size: 40px !important;
  }

  .navbar a {
    font-size: 20px;
    color: white;
  }

  .navbar .links a:hover {
    color: gray;
  }

  .navbar .login-dropdown a {
    color: white;
    transition: transform 0.3s;
  }

  .navbar .login-dropdown a .dropdown-menu {
    display: none;
    position: absolute;
  }

  .navbar .login-dropdown:hover .dropdown-menu {
    display: block;
  }

  .navbar .login-dropdown .dropdown-menu a {
    font-size: 16px !important;
    color: black;
  }

  .navbar .login-dropdown .dropdown-menu li:hover a {
    color: #343a40bf;
  }

  /* Default state: hide .menu_bar and show .links */
  .menu_bar {
    display: none;
  }

  .links ul li {
    display: inline-block;
  }



  .container {
    max-width: 100%;
    padding: 0 15px;
    box-sizing: border-box;
  }



  /* For screens with a max-width of 480px */
  @media (max-width: 480px) {
    .navbar .logo a {
      font-size: 25px !important;
    }

    .navbar .links ul li a {
      font-size: 10px;
    }

    .navbar .user .login-dropdown a,
    .navbar .menu_bar a {
      font-size: 13px;
    }

    .menu_bar {
      display: block !important;
      cursor: pointer;
    }

    .links ul li {
      display: none;
    }

    .links ul {
      display: none;
      flex-direction: column;
      width: 100%;
      /* background-color: #343a40bf; */
      background-color: #343a40e8;
      position: absolute;
      top: 80px;
      left: 0;
      padding: 10px 0;
      z-index: 0;
    }

    .links ul li {
      display: block;
      text-align: center;
    }

    .navbar .links ul li a {
      font-size: 15px;
    }

    .navbar .user .login-dropdown .dropdown-menu {
      width: 30px !important;
    }

    .navbar .user .login-dropdown .dropdown-menu a {
      font-size: 10px !important;
    }
  }
</style>

<nav class="navbar navbar-expand-lg">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="logo">
      <a class="navbar-brand text-white" href="index.php">MB</a>
    </div>

    <div class="links d-flex justify-content-center">
      <ul class="navbar-nav">
        <li class="nav-item active mx-3">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="index.php#our-services">Services</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#footer">Contact us</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="payment.php">Payment</a>
        </li>
      </ul>
    </div>

    <div class="user  d-flex align-items-center justify-content-center">
      <div class="login-dropdown dropdown">
        <?php if (isset($_SESSION['user_name'])): ?>
          <a class="nav-link dropdown-toggle main-login " href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['user_name']; ?>
            <i class="fa-solid fa-user"></i>
          </a>
          <div class="dropdown-menu mt-0 pt-0" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="user-profile.php">Profile</a>
            <a class="dropdown-item" href="booking-history.php">Booking History</a>
            <a class="dropdown-item" href="../backend/admin/logout.php">Logout</a>
          </div>
        <?php else: ?>
          <a class="nav-link dropdown-toggle main-login pb-0 mb-0" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Log in
            <i class="fa-solid fa-user"></i>
          </a>
          <div class="dropdown-menu mt-0 pt-0" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="user-login.php">User Login</a>
            <a class="dropdown-item" href="user-register.php">User Register</a>
            <a class="dropdown-item" href="admin-login.php">Admin Login</a>
          </div>
        <?php endif; ?>
      </div>
      <div class="menu_bar ">
        <a href="javascript:void(0);" onclick="toggleLinks()"><i class="fa-solid fa-bars"></i></a>
      </div>
    </div>
  </div>
</nav>

<script>
  function toggleLinks() {
    var links = document.querySelector('.navbar .links .navbar-nav');
    if (links.style.display === 'block') {
      links.style.display = 'none';
    } else {
      links.style.display = 'block';
    }
  }
</script>