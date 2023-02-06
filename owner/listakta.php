<!-- PHP Start -->
<?php
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
                            </span>List Akta
                        </h3>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="report.php?reportakta=true" class="btn btn-gradient-dark">Report Akta</a>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Table Akta</h4>
                                <table class="table table-hover pt-3 mb-3" id="example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Akta</th>
                                            <th>Date</th>
                                            <th>Type Akta</th>
                                            <th>Seller</th>
                                            <th>Buyer</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $q = "SELECT * FROM akta ORDER BY id DESC";
                                        $r = mysqli_query($db,$q);
                                        $c = 1;
                                        while ($akta = mysqli_fetch_array($r)) {
                                            if ($akta['type_akta'] == 'AJB') {
                                        ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $akta["no_akta"] ?></td>
                                            <td><?= date("j F Y l", strtotime($akta['created_at'])) ?></td>
                                            <td><?= $akta["type_akta"] ?></td>
                                            <td><?= $akta["seller"] ?></td>
                                            <td><?= $akta["buyer"] ?></td>
                                            <td><?= $akta["address"] ?></td>
                                            <td>
                                                <a href="detailakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-info btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-printer"></i>
                                                </a>
                                                <a href="viewpdf.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-primary btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-briefcase-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $c++;
                                        } else if ($akta['type_akta'] == 'Hibah') {
                                        ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $akta["no_akta"] ?></td>
                                            <td><?= date("j F Y l", strtotime($akta['created_at'])) ?></td>
                                            <td><?= $akta["type_akta"] ?></td>
                                            <td><?= $akta["seller"] ?></td>
                                            <td><?= $akta["buyer"] ?></td>
                                            <td><?= $akta["address"] ?></td>
                                            <td>
                                                <a href="detailakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-info btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-printer"></i>
                                                </a>
                                                <a href="viewpdf.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-primary btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-briefcase-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $c++;
                                        } else if ($akta['type_akta'] == 'APHB') {
                                        ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $akta["no_akta"] ?></td>
                                            <td><?= date("j F Y l", strtotime($akta['created_at'])) ?></td>
                                            <td><?= $akta["type_akta"] ?></td>
                                            <td><?= $akta["seller"] ?></td>
                                            <td><?= $akta["buyer"] ?></td>
                                            <td><?= $akta["address"] ?></td>
                                            <td>
                                                <a href="detailakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-info btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-printer"></i>
                                                </a>
                                                <a href="viewpdf.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-primary btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-briefcase-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $c++;
                                        } else if ($akta['type_akta'] == 'APHT') {
                                        ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $akta["no_akta"] ?></td>
                                            <td><?= date("j F Y l", strtotime($akta['created_at'])) ?></td>
                                            <td><?= $akta["type_akta"] ?></td>
                                            <td><?= $akta["seller"] ?></td>
                                            <td><?= $akta["buyer"] ?></td>
                                            <td><?= $akta["address"] ?></td>
                                            <td>
                                                <a href="detailakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-info btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-printer"></i>
                                                </a>
                                                <a href="viewpdf.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-primary btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-briefcase-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $c++;
                                        }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                                ?>
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