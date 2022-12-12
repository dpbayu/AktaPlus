<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="assets/images/faces/face1.jpg" alt="profile">
          <span class="login-status online"></span>
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2"><?php echo $_SESSION['fullname'] ?></span>
          <span class="text-secondary text-small">Project Manager</span>
        </div>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="formakta.php">
        <span class="menu-title">Form Akta</span>
        <i class="mdi mdi-file-document menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="listakta.php">
        <span class="menu-title">List Akta</span>
        <i class="mdi mdi-file-pdf-box menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="profile.php">
        <span class="menu-title">Profile</span>
        <i class="mdi mdi-face-profile menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>