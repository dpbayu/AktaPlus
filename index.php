<!-- PHP Start -->
<?php
session_start();
require "include/db.php";
?>
<!-- PHP End -->
<!DOCTYPE html>
<html lang="en">

<!-- Head Start -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-NOTE LOGIN</title>
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
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="admin/assets/images/logo-mini.svg" width="100" height="100">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" action="admin/function.php" method="POST">
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
                                        href="admin/register.php" class="text-primary">Create</a>
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