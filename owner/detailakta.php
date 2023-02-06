<!-- PHP Start -->
<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../owner.php");
    exit;
}
require "../include/db.php";
require "function.php";
$page = 'akta';
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
                            </span>Detail Akta
                        </h3>
                    </div>
                    <div style="text-align:right; margin-bottom: 10px;">
                        <a class="no-print btn btn-gradient-dark" href="javascript:printDiv('print-area-1');">Print</a>
                    </div>
                    <div id="print-area-1" class="print-area">
                        <div class="row">
                            <div class="card">
                                <div class="card-body" style="overflow-x: auto;">
                                    <h4 class="card-title">Table Akta</h4>
                                    <?php
                                    $id = mysqli_real_escape_string($db,$_GET['id']);
                                    $sql = "SELECT * FROM akta WHERE id='$id'";
                                    $query = mysqli_query($db,$sql);
                                    $data = mysqli_fetch_array($query);
                                    ?>
                                    <table class="table table-hover" border="1" cellpadding="5" cellspacing="0">
                                        <thead>
                                            <tr style="font-size: 11px; text-align:center; font-weight: 700;">
                                                <th>No</th>
                                                <th>No Akta</th>
                                                <th>Type Akta</th>
                                                <th>Seller</th>
                                                <th>Buyer</th>
                                                <th>No HAK</th>
                                                <th>Address</th>
                                                <th>Surface Area</th>
                                                <th>Transaction</th>
                                                <th>Certificate</th>
                                                <th>PBB</th>
                                                <th>NJOP</th>
                                                <th>SSP</th>
                                                <th>SSB</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="font-size: 9px; text-align: center;">
                                                <td><?= $data['id'] ?></td>
                                                <td><?= $data["no_akta"] ?></td>
                                                <td><?= $data["type_akta"] ?></td>
                                                <td><?= $data["seller"] ?></td>
                                                <td><?= $data["buyer"] ?></td>
                                                <td><?= $data["no_hak"] ?></td>
                                                <td><?= $data["address"] ?></td>
                                                <td><?= $data["surface_area"] ?></td>
                                                <td><?= $data["transaction"] ?></td>
                                                <td><?= $data["certificate"] ?></td>
                                                <td><?= $data["pbb"] ?></td>
                                                <td><?= $data["njop"] ?></td>
                                                <td><?= $data["ssp"] ?></td>
                                                <td><?= $data["ssb"] ?></td>
                                                <td><?= $data["description"] ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <textarea id="printing-css" style="display:none;"></textarea>
                    <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
                </div>
                <!-- Content End -->
                <!-- Footer Start -->
                <?php require "partials/footer.php" ?>
                <!-- Footer End -->
            </div>
        </div>
    </div>
</body>
<script>
    function printDiv(elementId) {
        var a = document.getElementById('printing-css').value;
        var b = document.getElementById(elementId).innerHTML;
        window.frames["print_frame"].document.title = document.title;
        window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
        window.frames["print_frame"].window.focus();
        window.frames["print_frame"].window.print();
    }
</script>

</html>