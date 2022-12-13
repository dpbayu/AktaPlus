<!-- PHP Start -->
session_start();
<?php
    require "../include/db.php";
    $data = mysqli_query($db, "SELECT * FROM akta WHERE id = '".$_GET['id']."'");
    $r = mysqli_fetch_array($data);
    $no_akta = $r['no_akta'];
    $type_akta = $r['type_akta'];
    $seller = $r['seller'];
    $buyer = $r['buyer'];
    $no_hak = $r['no_hak'];
    $address = $r['address'];
    $surface_area = $r['surface_area'];
    $transaction = $r['transaction'];
    $certificate = $r['certificate'];
    $pbb = $r['pbb'];
    $njop = $r['njop'];
    $ssp = $r['ssp'];
    $ssb = $r['ssb'];
    $description = $r['description'];
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
                                <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                                    <div class="d-flex justify-content-evenly gap-5">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="NoAkta">No Akta</label>
                                                <input type="text" class="form-control" id="NoAkta" name="no_akta"
                                                    value="<?= $no_akta ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="TypeAkta">Type Akta</label>
                                                <select class="form-control" style="height: 50px;" id="TypeAkta"
                                                    name="type_akta">
                                                    <option value="AJB"
                                                        <?php if($type_akta == "AJB") echo "selected" ?>>AJB</option>
                                                    <option value="Hibah"
                                                        <?php if($type_akta == "Hibah") echo "selected" ?>>Hibah
                                                    </option>
                                                    <option value="APHT"
                                                        <?php if($type_akta == "APHT") echo "selected" ?>>APHT</option>
                                                    <option value="APHB"
                                                        <?php if($type_akta == "APHB") echo "selected" ?>>APHB</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Seller">Seller</label>
                                                <input type="text" class="form-control" id="Seller" name="seller"
                                                    value="<?= $seller ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="buyer">Buyer</label>
                                                <input type="text" class="form-control" id="buyer" name="buyer"
                                                    value="<?= $buyer ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="NoHAK">No HAK</label>
                                                <input type="text" class="form-control" id="NoHAK" name="no_hak"
                                                    value="<?= $no_hak ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Address">Address</label>
                                                <input type="text" class="form-control" id="Address" name="address"
                                                    value="<?= $address ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="SSB">SSB</label>
                                                <input type="text" class="form-control" id="SSB" name="ssb"
                                                    value="<?= $ssb ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="SurfaceArea">Surface Area</label>
                                                <input type="text" class="form-control" id="SurfaceArea"
                                                    name="surface_area" value="<?= $surface_area ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Transaction">Transaction</label>
                                                <input type="text" class="form-control" id="Transaction"
                                                    name="transaction" value="<?= $transaction ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Certificate">Certificate</label>
                                                <input type="text" class="form-control" id="Certificate"
                                                    name="certificate" value="<?= $certificate ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="PBB">PBB</label>
                                                <input type="text" class="form-control" id="PBB" name="pbb"
                                                    value="<?= $pbb ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="NJOP">NJOP</label>
                                                <input type="text" class="form-control" id="NJOP" name="njop"
                                                    value="<?= $njop ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Description">SSP</label>
                                                <input type="text" class="form-control" id="SSP" name="ssp"
                                                    value="<?= $ssp ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Description">Description</label>
                                                <input type="text" class="form-control" id="Description"
                                                    name="description" value="<?= $description ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin: 0 67px;">
                                        <label for="pdf">Upload file</label>
                                        <input type="hidden" class="form-control" name="id" value="<?= $pdf_akta ?>">
                                        <input type="file" class="form-control file-upload-info" id="pdf"
                                            name="pdf_akta">
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" name="update"
                                            class="btn btn-gradient-primary me-2">Submit</button>
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

    <?php
    if(isset($_POST['update'])) {
        $no_akta = $_POST['no_akta'];
        $type_akta = $_POST['type_akta'];
        $seller = $_POST['seller'];
        $buyer = $_POST['buyer'];
        $no_hak = $_POST['no_hak'];
        $address = $_POST['address'];
        $surface_area = $_POST['surface_area'];
        $transaction = $_POST['transaction'];
        $certificate = $_POST['certificate'];
        $pbb = $_POST['pbb'];
        $njop = $_POST['njop'];
        $ssp = $_POST['ssp'];
        $ssb = $_POST['ssb'];
        $description = $_POST['description'];
        $pdf_akta = $_FILES['pdf_akta']['name'];
        $extention_file	= array('pdf','docx');
        $text = explode('.', $pdf_akta);
        $extention = strtolower(end($text));
        $ukuran = $_FILES['pdf_akta']['size'];
        $file_tmp = $_FILES['pdf_akta']['tmp_name'];
        if (in_array($extention, $extention_file) === true) {
            if ($ukuran < 1044070) {
                move_uploaded_file($file_tmp, 'assets/'.$pdf_akta);
                $update = mysqli_query($db, "UPDATE akta SET
                no_akta = '".$no_akta."',
                type_akta = '".$type_akta."',
                seller = '".$seller."',
                buyer = '".$buyer."',
                no_hak = '".$no_hak."',
                address = '".$address."',
                surface_area = '".$surface_area."',
                transaction = '".$transaction."',
                certificate = '".$certificate."',
                pbb = '".$pbb."',
                njop = '".$njop."',
                ssp = '".$ssp."',
                ssb = '".$ssb."',
                description = '".$description."',
                pdf_akta = '".$pdf_akta."'
                WHERE id = '".$_GET['id']."'");
                if ($update) {
                    echo "<script>window.location = 'listakta.php?message=Data update success'</script>";
                    exit();                
                } else {
                    echo "<script>window.location = 'listakta.php?message=Data update failed'</script>";
                    exit();                   
                }
            }
        }  else {
            $update = mysqli_query($db, "UPDATE akta SET
            no_akta = '".$no_akta."',
            type_akta = '".$type_akta."',
            seller = '".$seller."',
            buyer = '".$buyer."',
            no_hak = '".$no_hak."',
            address = '".$address."',
            surface_area = '".$surface_area."',
            transaction = '".$transaction."',
            certificate = '".$certificate."',
            pbb = '".$pbb."',
            njop = '".$njop."',
            ssp = '".$ssp."',
            ssb = '".$ssb."',
            description = '".$description."'
            WHERE id = '".$_GET['id']."'");
            if ($update) {
                echo "<script>window.location = 'listakta.php?message=Data update success'</script>";
                exit();                          
            } else {
                echo "<script>window.location = 'listakta.php?message=Data update failed'</script>";
                exit();                          
            }
        }
    }
?>
</body>

</html>