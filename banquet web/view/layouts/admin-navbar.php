<style>
  /* Ensure the navbar spans the full width of the page */
  nav {
    background-color: #34495e;
    position: fixed;
    margin-left: 250px;
    /* padding-left: 250px; */
    top: 0;
    left: 0;
    /* width: 100%; */
    z-index: 1000;
  }

  /* Menu icon styling */
  .menu_icon {
    display: none;
    /* Initially hidden */
    font-size: 25px;
    cursor: pointer;
    color: white;
    /* padding: 10px; */
  }

  /* Show the menu icon on small screens */
  @media (max-width: 480px) {
    .menu_icon {
      display: block;
      margin-left: 10px;
    }

    nav {
      margin-left: 0;
      /* Navbar should span the full width on small screens */
    }
  }

  /* Transition effect for the menu icon */
  .menu_icon i {
    transition: transform 0.3s ease-in-out;
  }

  /* Sidebar active state */
  .sidebar.active {
    transform: translateX(0);
  }
</style>

<nav class="navbar navbar-light d-flex align-items-center justify-content-center">
  <!-- Menu Icon -->
  <a href="javascript:void(0);" id="menu-toggle" class="menu_icon">
    <i class="fa-solid fa-bars"></i>
  </a>

  <div class="dropdown ml-auto mr-5">
    <a class="main btn btn-secondary d-flex align-items-center" href="#">
      <?php echo $_SESSION['admin_username'] ?>
      <i class="ml-2 fa-solid fa-user"></i>
    </a>
    <div class="dropdown-menu mt-0 pt-0">
      <a class="dropdown-item" href="admin-profile.php">Profile</a>
      <a class="dropdown-item" id="logoutBtn" href="logout.php">Logout</a>
    </div>
  </div>
</nav>



<script>
  document.getElementById('menu-toggle').addEventListener('click', function () {
    var sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
  });
</script>