<!-- PHP Start -->
<?php
session_start();
require "../include/db.php";
require "../include/function.php";
$akta = query ("SELECT * FROM akta ORDER BY id DESC");
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
                            </span> List Akta
                        </h3>
                    </div>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                            <?php
                            if (isset($_GET['message'])) {
                                $msg = $_GET['message'];
                                echo '
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>'.$msg.'</strong>
                                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                                </div>';
                            }
                            ?>
                                <h4 class="card-title">Table Akta</h4>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Akta</th>
                                            <th>Type Akta</th>
                                            <th>Seller</th>
                                            <th>Buyer</th>
                                            <th>Address</th>
                                            <th>File</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($akta as $akt) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $akt["no_akta"] ?></td>
                                            <td><?= $akt["type_akta"] ?></td>
                                            <td><?= $akt["seller"] ?></td>
                                            <td><?= $akt["buyer"] ?></td>
                                            <td><?= $akt["address"] ?></td>
                                            <td><?= $akt["pdf_akta"] ?></td>
                                            <td>
                                                <a href="editakta.php?id=<?= $akt['id'] ?>"
                                                    class="btn btn-inverse-success btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-tooltip-edit"></i>
                                                </a>
                                                <a onclick="return confirm('Are you sure delete this data ?')"
                                                    href="deleteakta.php?id=<?= $akt['id'] ?>"
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
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