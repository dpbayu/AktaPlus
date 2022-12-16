<!-- PHP Start -->
<?php
require "../include/db.php";
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
                        <a class="no-print" href="javascript:printDiv('print-area-1');">Print</a>
                    </div>
                    <div id="print-area-1" class="print-area">
                        <div class="row">
                            <div class="card">
                                <div class="card-body" style="overflow-x: auto;">
                                    <h4 class="card-title">Table Akta</h4>
                                    <?php
                                    $sql = "SELECT * FROM akta WHERE type_akta = 'AJB'";
                                    $query = mysqli_query($db,$sql);
                                    $data = mysqli_fetch_array($query);
                                    ?>
                                    <table class="table table-hover">
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
                                            <?php
                                            $q = "SELECT * FROM akta WHERE type_akta = 'AJB'";
                                            $r = mysqli_query($db,$q);
                                            $c = 1;
                                            while ($akta = mysqli_fetch_array($r)) {
                                            if ($akta['type_akta']=='AJB') {
                                            ?>
                                            <tr style="font-size: 9px; text-align: center;">
                                                <td><?= $c ?></td>
                                                <td><?= $akta["no_akta"] ?></td>
                                                <td><?= $akta["type_akta"] ?></td>
                                                <td><?= $akta["seller"] ?></td>
                                                <td><?= $akta["buyer"] ?></td>
                                                <td><?= $akta["no_hak"] ?></td>
                                                <td><?= $akta["address"] ?></td>
                                                <td><?= $akta["surface_area"] ?></td>
                                                <td><?= $akta["transaction"] ?></td>
                                                <td><?= $akta["certificate"] ?></td>
                                                <td><?= $akta["pbb"] ?></td>
                                                <td><?= $akta["njop"] ?></td>
                                                <td><?= $akta["ssp"] ?></td>
                                                <td><?= $akta["ssb"] ?></td>
                                                <td><?= $akta["description"] ?></td>
                                            </tr>
                                            <?php
                                        $c++;
                                        }
                                        }
                                        ?>
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