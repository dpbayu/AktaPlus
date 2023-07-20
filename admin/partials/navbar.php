<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="index.php">
      <img src="assets/images/logo.png" alt="logo" />
    </a>
    <a class="navbar-brand brand-logo-mini" href="index.php">
      <img src="assets/images/icon.png" alt="logo" />
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link" href="../admin/profile.php">
          <div class="nav-profile-text">
            <p class="mb-1 text-black"><?php echo $_SESSION['fullname'] ?></p>
          </div>
        </a>
      </li>
      <div class="dropdown position-relative">
        <button class="btn btn-transparent p-2 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="mdi mdi-message"></i>
          <span class="label label-pill label-danger count" style="border-radius:10px;"></span>
        </button>
        <ul class="dropdown-menu px-3 position-absolute"></ul>
      </div>
      <li class="nav-item d-none d-lg-block full-screen-link">
        <a class="nav-link">
          <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
        </a>
      </li>
      <li class="nav-item nav-logout d-none d-lg-block">
        <a class="nav-link" href="../admin/logout.php">
          <i class="mdi mdi-power"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>