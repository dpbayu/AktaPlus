<!-- PHP Start -->
<?php
session_start();
require "../include/db.php";
if (isset($_SESSION['role']))
?>
<!-- PHP End -->

<!DOCTYPE html>
<html lang="en">

<!-- Head Start -->
<?php require "partials/head.php" ?>
<!-- Head End -->

<body>
  <div class="container-scroller">
    <!-- Navbar Start -->
    <?php require "partials/navbar.php" ?>
    <!-- Navbar End -->
    <div class="container-fluid page-body-wrapper">
      <!-- Sidebar Start -->
      <?php require "partials/sidebar.php" ?>
      <!-- Sidebar End -->
      <div class="main-panel">
        <!-- Content Start -->
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
              </span>Dashboard
            </h3>
          </div>
          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Akta
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">
                    <?php
                      $sql = "SELECT * FROM akta";
                      $query = mysqli_query($db, $sql);
                      $count = mysqli_num_rows($query);
                      echo "$count";
                    ?>
                  </h2>
                  <a href="listakta.php?viewakta=true" class="card-text text-decoration-none text-white">All Akta</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">AJB
                    <i class="mdi mdi-book mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">
                    <?php
                      $sql = "SELECT * FROM akta WHERE type_akta = 'AJB'";
                      $query = mysqli_query($db, $sql);
                      $count = mysqli_num_rows($query);
                      echo "$count";
                    ?>
                  </h2>
                  <a href="listakta.php?totalajb=true" class="card-text text-decoration-none text-white">List AJB</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">Hibah
                    <i class="mdi mdi-briefcase mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">
                    <?php
                      $sql = "SELECT * FROM akta WHERE type_akta = 'Hibah'";
                      $query = mysqli_query($db, $sql);
                      $count = mysqli_num_rows($query);
                      echo "$count";
                    ?>
                  </h2>
                  <a href="listakta.php?totalhibah=true" class="card-text text-decoration-none text-white">List Hibah</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-gradient-dark card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">APHB
                    <i class="mdi mdi-checkerboard mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">
                    <?php
                      $sql = "SELECT * FROM akta WHERE type_akta = 'APHB'";
                      $query = mysqli_query($db, $sql);
                      $count = mysqli_num_rows($query);
                      echo "$count";
                    ?>
                  </h2>
                  <a href="listakta.php?totalaphb=true" class="card-text text-decoration-none text-white">List APHB</a>
                </div>
              </div>
            </div>
            <div class="col-md-3 stretch-card grid-margin">
              <div class="card bg-gradient-primary card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h4 class="font-weight-normal mb-3">APHT
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5">
                    <?php
                      $sql = "SELECT * FROM akta WHERE type_akta = 'APHT'";
                      $query = mysqli_query($db, $sql);
                      $count = mysqli_num_rows($query);
                      echo "$count";
                    ?>
                  </h2>
                  <a href="listakta.php?totalapht=true" class="card-text text-decoration-none text-white">List APHT</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Content End -->
        <!-- Footer Start -->
        <?php require "partials/footer.php" ?>
        <!-- Footer End -->
      </div>
    </div>
  </div>

</body>

</html>