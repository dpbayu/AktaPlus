<!-- PHP Start -->
<?php
require "function.php";
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
                            <form class="pt-3" action="function.php" method="POST">
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