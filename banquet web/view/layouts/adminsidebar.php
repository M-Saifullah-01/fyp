<style>
  /* Default Sidebar styles */
  .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    height: 100vh;
    background-color: #676b70;
    color: white;
    transition: transform 0.3s ease-in-out;
    /* Transition for sliding effect */
    transform: translateX(0);
    /* Sidebar visible by default */
    z-index: 1000;
  }

  /* Hide the sidebar by translating it off-screen */
  .sidebar.hide {
    transform: translateX(-100%);
  }

  /* Sidebar styles for smaller screens */
  @media (max-width: 480px) {
    .sidebar {
      width: 200px;
      transform: translateX(-100%);
      /* Hide sidebar by default on small screens */
    }

    /* When active, the sidebar slides into view */
    .sidebar.show {
      transform: translateX(0);
    }

    /* Hide sidebar on small screens by default */
    .sidebar.hide {
      display: none;
    }
  }

  /* Sidebar Header styles */
  .sidebar-header {
    padding: 20px;
    background-color: #34495e;
    text-align: center;
  }

  /* Sidebar Menu styles */
  .sidebar-body .sidebar-menu {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .sidebar-menu li {
    width: 100%;
  }

  .sidebar-menu a {
    font-size: 19px;
    display: block;
    padding: 15px 20px;
    color: white;
    text-decoration: none;
    transition: background 0.3s;
  }

  .sidebar-menu a:hover {
    background-color: #34495e;
  }

  /* Menu icon styles */
  #menu-toggle {
    display: none;
    /* Hidden by default */
  }

  @media (max-width: 480px) {
    #menu-toggle {
      display: block;
      /* Show the menu icon on small screens */
      position: fixed;
      top: 10px;
      left: 10px;
      font-size: 24px;
      color: white;
      z-index: 1100;
      /* Ensure the icon is above the sidebar */
    }

    .sidebar .logo {
      padding-top: 40px;
    }
  }
</style>


<nav class="navbar sider p-0">
  <div class="sidebar">
    <div class="sidebar-header">
      <div class="logo">
        <img src="assets/img/admin-logo.png" alt="" class="w-50" style="border-radius: 50%;">
      </div>
      <h2>Admin Panel</h2>
    </div>
    <div class="sidebar-body">
      <ul class="sidebar-menu">
        <li><a href="index.php">Dashboard</a></li>




        <li>
          <a data-toggle="collapse" href="#pakage-dropdown-menu"
            class="d-flex align-items-center justify-content-between">
            Add Hall
            <i class="fa-solid fa-caret-down pl-4 text-white" style="font-size: 20px;"></i>
          </a>
          <ul class="collapse" id="pakage-dropdown-menu" style="list-style: none;">
            <li><a href="add-hall.php" class="text-white" style="font-size: 15px;">Add Hall</a></li>
            <li><a href="manage-add-hall.php" class="text-white" style="font-size: 15px;">Manage Hall</a></li>

          </ul>
        </li>

        <li>
          <a data-toggle="collapse" href="#menu-dropdown" class="d-flex align-items-center justify-content-between">
            Menu
            <i class="fa-solid fa-caret-down pl-4 text-white" style="font-size: 20px;"></i>
          </a>
          <ul class="collapse" id="menu-dropdown" style="list-style: none;">
            <li><a href="add-menu.php" class="text-white" style="font-size: 15px;">Add Menu</a></li>
            <li><a href="manage-menu.php" class="text-white" style="font-size: 15px;">Manage Menu</a></li>

          </ul>
        </li>
        <li>
          <a data-toggle="collapse" href="#gallery-dropdown-menu"
            class="d-flex align-items-center justify-content-between">
            Gallery
            <i class="fa-solid fa-caret-down pl-4 text-white" style="font-size: 20px;"></i>
          </a>
          <ul class="collapse" id="gallery-dropdown-menu" style="list-style: none;">
            <li><a href="add-gallery.php" class="text-white" style="font-size: 15px;">Add Gallery</a></li>
            <li><a href="manage-gallery.php" class="text-white" style="font-size: 15px;">Manage Gallery</a></li>

          </ul>
        </li>



        <li><a href="faqs.php">FAQs</a></li>
        <li><a href="logout.php" id="logoutBtn">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>