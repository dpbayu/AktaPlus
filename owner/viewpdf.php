<!-- PHP Start -->
<?php
session_start();
require "../include/db.php";
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
                            </span>PDF Akta
                        </h3>
                    </div>
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
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
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
                                            <th>File</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
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
                                            <td><?= $data["pdf_akta"] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <embed class="my-5" src="../assets/file/<?= $data["pdf_akta"] ?>" type="application/pdf" width="100%" height="700px" />
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