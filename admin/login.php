<!-- PHP Start -->
<?php
session_start();
require "../include/db.php";
// Login
if (isset($_POST['login'])) {
    $nik = mysqli_escape_string($db, $_POST['nik']);
    $password = mysqli_escape_string($db, $_POST['password']);
    // pengecekan nik
    $sql = "SELECT * FROM user WHERE nik = '$nik'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) <=0 ) {
        header("Location: login.php?message=Login Gagal");
        exit();
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            if (!password_verify($password, $row['password'])) {
                header("Location: login.php?message=Password Salah");
                exit();
            } else if (password_verify($password, $row['password'])) {
                $_SESSION['nik'] = $row['nik'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['role'] = $row['role'];
                header("Location: index.php");
                exit();
            }
        }
    }
}
?>
<!-- PHP End -->
<!DOCTYPE html>
<html lang="en">

<!-- Head Start -->
<?php require "partials/head.php" ?>
<!-- Head End -->

<body>
    <div class="container-scroller">
        <!-- Page Body Wrapper Start -->
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <!-- Content Wrapper Start -->
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="assets/images/logo.svg">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="NIK"
                                        name="nik">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" placeholder="Password"
                                        name="password">
                                </div>
                                <button type="submit" name="login"
                                    class="mt-3 btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                    IN
                                </button>
                                <div class="text-center mt-4 font-weight-light"> Don't have an account? <a
                                        href="register.php" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Wrapper End -->
        </div>
        <!-- Page Body Wrapper End -->
    </div>
</body>

</html>