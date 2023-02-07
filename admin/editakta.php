<!-- PHP Start -->
<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit;
}
require "function.php";
$page = 'form';
$id = $_GET["id"];
$akta = query("SELECT * FROM akta WHERE id = $id")[0];
if(isset($_POST["submit"])) {
    if(edit($_POST) > 0) {
        echo "<script>alert('data berhasil diubah!');
                document.location.href = 'listakta.php';
                </script>";
    } else {
        echo "<script>alert('data gagal diubah!');
                document.location.href = 'listakta.php';
                </script>";    
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
                                <i class="mdi mdi-database"></i>
                            </span>Edit Akta
                        </h3>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $akta["id"]; ?>">
                                    <div class="d-flex justify-content-evenly gap-5">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="NoAkta">No Akta</label>
                                                <input type="text" class="form-control" id="NoAkta" name="no_akta"
                                                    value="<?= $akta["no_akta"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="TypeAkta">Type Akta</label>
                                                <select class="form-control" style="height: 50px;" id="TypeAkta"
                                                    name="type_akta">
                                                    <option value="AJB"
                                                        <?php if($akta == "AJB") echo "selected" ?>>AJB
                                                    </option>
                                                    <option value="Hibah"
                                                        <?php if($akta == "Hibah") echo "selected" ?>>Hibah
                                                    </option>
                                                    <option value="APHT"
                                                        <?php if($akta == "APHT") echo "selected" ?>>APHT</option>
                                                    <option value="APHB"
                                                        <?php if($akta == "APHB") echo "selected" ?>>APHB</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Seller">Seller</label>
                                                <input type="text" class="form-control" id="Seller" name="seller"
                                                    value="<?= $akta["seller"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="buyer">Buyer</label>
                                                <input type="text" class="form-control" id="buyer" name="buyer"
                                                    value="<?= $akta["buyer"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="NoHAK">No HAK</label>
                                                <input type="text" class="form-control" id="NoHAK" name="no_hak"
                                                    value="<?= $akta["no_hak"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Address">Address</label>
                                                <input type="text" class="form-control" id="Address" name="address"
                                                    value="<?= $akta["address"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="SSB">SSB</label>
                                                <input type="text" class="form-control" id="SSB" name="ssb"
                                                    value="<?= $akta["ssb"] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="SurfaceArea">Surface Area</label>
                                                <input type="text" class="form-control" id="SurfaceArea"
                                                    name="surface_area" value="<?= $akta["surface_area"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Transaction">Transaction</label>
                                                <input type="text" class="form-control" id="Transaction"
                                                    name="transaction" value="<?= $akta["transaction"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Certificate">Certificate</label>
                                                <input type="text" class="form-control" id="Certificate"
                                                    name="certificate" value="<?= $akta["certificate"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="PBB">PBB</label>
                                                <input type="text" class="form-control" id="PBB" name="pbb"
                                                    value="<?= $akta["pbb"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="NJOP">NJOP</label>
                                                <input type="text" class="form-control" id="NJOP" name="njop"
                                                    value="<?= $akta["njop"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Description">SSP</label>
                                                <input type="text" class="form-control" id="SSP" name="ssp"
                                                    value="<?= $akta["ssp"] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Description">Description</label>
                                                <input type="text" class="form-control" id="Description"
                                                    name="description" value="<?= $akta["description"] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin: 0 67px;">
                                        <label for="pdf">Upload file</label>
                                        <input type="hidden" class="form-control" name="id" value="<?= $akta["pdf_akta"] ?>">
                                        <input type="file" class="form-control file-upload-info" id="pdf"
                                            name="pdf_akta">
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" name="submit"
                                            class="btn btn-gradient-primary me-2">Submit</button>
                                        <input class="btn btn-light" type="button" onclick="history.back()" value="Back">
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
</body>

</html>