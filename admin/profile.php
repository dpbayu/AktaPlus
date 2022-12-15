<!-- PHP Start -->
<?php
session_start();
require "../include/db.php";
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
                                <i class="mdi mdi-account"></i>
                            </span>Profile
                        </h3>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="function.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="NIK">NIK</label>
                                        <input type="text" class="form-control" id="NIK" name="nik"
                                            value="<?php echo $_SESSION['nik'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname">Fullname</label>
                                        <input type="text" class="form-control" id="fullname" name="fullname"
                                            value="<?php echo $_SESSION['fullname'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <button type="submit" name="update"
                                        class="btn btn-gradient-primary me-2">Submit</button>
                                </form>
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