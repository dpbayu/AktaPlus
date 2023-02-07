<!-- PHP Start -->
<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: admin/index.php");
    exit;
}
require "include/db.php";
if (isset($_POST['login'])) {
    $nik = mysqli_escape_string($db, $_POST['nik']);
    $password = mysqli_escape_string($db, $_POST['password']);
        // pengecekan nik
        $sql = "SELECT * FROM user WHERE nik = '$nik'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) === 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $row['password'])) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['nik'] = $row['nik'];
                    $_SESSION['fullname'] = $row['fullname'];
                    $_SESSION['user_profile'] = $row['user_profile'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION["login"] = true;
                    header("Location: admin/index.php");
                    exit();
                }
            }
        }
        $error = true;
    }
?>
<!-- PHP End -->
<!DOCTYPE html>
<html lang="en">

<!-- Head Start -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-NOTE LOGIN | Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="shortcut icon" href="admin/assets/images/favicon.ico" />
</head>
<!-- Head End -->

<body>
    <div class="container-scroller">
        <!-- Page Body Wrapper Start -->
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <!-- Content Wrapper Start -->
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-md-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="admin/assets/images/logo-mini.svg" width="100" height="100">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <!-- Notif Error Start -->
                            <?php if(isset($error)) : ?>
                            <p style="color: red; font-style: italic;">Username / password salah</p>
                            <?php endif; ?>
                            <!-- Notif Error End -->
                            <form class="pt-3" action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="NIK"
                                        name="nik">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" placeholder="Password"
                                        name="password">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" name="login"
                                        class="mt-3 btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                        IN
                                    </button>
                                </div>
                                    <div class="text-center mt-4 font-weight-light"> Owner ? <a href="owner.php"
                                            class="text-primary">Click here</a>
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