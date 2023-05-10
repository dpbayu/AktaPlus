<!-- PHP Start -->
<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: owner/index.php");
    exit;
}
require "include/db.php";
if (isset($_POST['login'])) {
    $username = mysqli_escape_string($db, $_POST['username']);
    $password = mysqli_escape_string($db, $_POST['password']);
        // pengecekan username
        $sql = "SELECT * FROM owner WHERE username = '$username'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) === 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $row['password'])) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['fullname'] = $row['fullname'];
                    $_SESSION['admin_profile'] = $row['admin_profile'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION["login"] = true;
                    header("Location: owner/index.php");
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
    <title>Akta Plus | Owner</title>
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
                            <!-- Notif Error Start -->
                            <?php if(isset($error)) : ?>
                            <p style="color: red; font-style: italic;">Username / password salah</p>
                            <?php endif; ?>
                            <!-- Notif Error End -->
                            <form class="pt-3" action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Username"
                                        name="username">
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
                                <div class="text-center mt-4 font-weight-light"> Admin ? <a
                                        href="index.php" class="text-primary">Click here</a>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="bg-white w-50 mt-2 p-3">
                            <span>Username : Dwi</span>
                            <br>
                            <span>Pass : 789654</span>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Content Wrapper End -->
        </div>
        <!-- Page Body Wrapper End -->
    </div>
</body>

</html>