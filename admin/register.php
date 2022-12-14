<?php
require "function.php";
?>
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
                                <img src="assets/images/logo-mini.svg" width="100" height="100">
                            </div>
                            <h4>New here ?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" action="" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="NIK"
                                        name="nik">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Fullname"
                                        name="fullname">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" placeholder="Password"
                                        name="password">
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-lg" name="role">
                                        <option>Admin</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" name="register"
                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                        UP
                                    </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Already have an account? <a
                                        href="../index.php" class="text-primary">Login</a>
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