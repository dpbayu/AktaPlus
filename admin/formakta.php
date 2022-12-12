<!-- PHP Start -->
<?php
require "../include/db.php";
require "../include/function.php";
$akta = query ("SELECT * FROM akta");
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
                            </span> Form Akta
                        </h3>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample">
                                    <div class="d-flex justify-content-evenly gap-5">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="NoAkta">No Akta</label>
                                                <input type="text" class="form-control" id="NoAkta" name="no_akta"
                                                    placeholder="Input no akta">
                                            </div>
                                            <div class="form-group">
                                                <label for="TypeAkta">Type Akta</label>
                                                <select class="form-control" style="height: 50px;" id="TypeAkta"
                                                    name="type_akta">
                                                    <option>AJB</option>
                                                    <option>HIBAH</option>
                                                    <option>APHB</option>
                                                    <option>APHT</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Seller">Seller</label>
                                                <input type="text" class="form-control" id="Seller" name="seller"
                                                    placeholder="Input seller">
                                            </div>
                                            <div class="form-group">
                                                <label for="buyer">Buyer</label>
                                                <input type="text" class="form-control" id="buyer" name="buyer"
                                                    placeholder="Input buyer" name="buyer">
                                            </div>
                                            <div class="form-group">
                                                <label for="NoHAK">No HAK</label>
                                                <input type="text" class="form-control" id="NoHAK" name="no_hak"
                                                    placeholder="Input no HAK">
                                            </div>
                                            <div class="form-group">
                                                <label for="Address">Address</label>
                                                <input type="text" class="form-control" id="Address" name="address"
                                                    placeholder="Input address">
                                            </div>
                                            <div class="form-group">
                                                <label for="SSB">SSB</label>
                                                <input type="text" class="form-control" id="SSB" name="ssb"
                                                    placeholder="Input SSB">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="SurfaceArea">Surface Area</label>
                                                <input type="text" class="form-control" id="SurfaceArea"
                                                    name="surface_area" placeholder="Input Surface Area">
                                            </div>
                                            <div class="form-group">
                                                <label for="Transaction">Transaction</label>
                                                <input type="text" class="form-control" id="Transaction"
                                                    name="transaction" placeholder="Input Transaction">
                                            </div>
                                            <div class="form-group">
                                                <label for="Certificate">Certificate</label>
                                                <input type="text" class="form-control" id="Certificate"
                                                    name="certificate" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="PBB">PBB</label>
                                                <input type="text" class="form-control" id="PBB" name="pbb"
                                                    placeholder="Input PBB">
                                            </div>
                                            <div class="form-group">
                                                <label for="NJOP">NJOP</label>
                                                <input type="text" class="form-control" id="NJOP" name="njop"
                                                    placeholder="Input NJOP">
                                            </div>
                                            <div class="form-group">
                                                <label for="Description">SSP</label>
                                                <input type="text" class="form-control" id="SSP" name="ssp"
                                                    placeholder="Input SSP">
                                            </div>
                                            <div class="form-group">
                                                <label for="Description">Description</label>
                                                <input type="text" class="form-control" id="Description"
                                                    name="description" placeholder="Input Description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin: 0 67px;">
                                        <label for="file">Upload file</label>
                                        <input type="file" class="form-control file-upload-info" id="file"
                                            name="pdf_akta" placeholder="Upload PDF">
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </div>
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

    <!-- JS Start  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- JS End -->

</body>

</html>