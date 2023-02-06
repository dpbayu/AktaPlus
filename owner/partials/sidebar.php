<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
      <img src="assets/images/<?php echo $_SESSION['admin_profile'] ?>" class="rounded-circle" height="50"
            width="50">
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2"><?php echo $_SESSION['username'] ?></span>
          <span class="text-secondary text-small"><?php echo $_SESSION['role'] ?></span>
        </div>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item <?php if($page=='akta'){echo 'active';} ?>">
      <a class="nav-link" href="listakta.php">
        <span class="menu-title">List Akta</span>
        <i class="mdi mdi-database menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="profile.php">
        <span class="menu-title">Profile</span>
        <i class="mdi mdi-account menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>