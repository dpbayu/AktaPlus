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
                <?php
                if (isset($_GET['viewakta'])) {
                ?>
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-database"></i>
                            </span>List Akta
                        </h3>
                    </div>
                    <div class="d-flex mb-3" >
                        <a href="report.php?reportakta=true" class="btn btn-gradient-dark">Report Akta</a>
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
                                        <?php
                                        $q = "SELECT * FROM akta";
                                        $r = mysqli_query($db,$q);
                                        $c = 1;
                                        while ($akta = mysqli_fetch_array($r)) {
                                            if ($akta['type_akta']=='AJB') {
                                        ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $akta["no_akta"] ?></td>
                                            <td><?= $akta["type_akta"] ?></td>
                                            <td><?= $akta["seller"] ?></td>
                                            <td><?= $akta["buyer"] ?></td>
                                            <td><?= $akta["address"] ?></td>
                                            <td><?= $akta["pdf_akta"] ?></td>
                                            <td>
                                                <a href="editakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-success btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-tooltip-edit"></i>
                                                </a>
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
                                                <a onclick="return confirm('Are you sure delete this data ?')"
                                                    href="deleteakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $c++;
                                        } else if ($akta['type_akta']=='Hibah') {
                                        ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $akta["no_akta"] ?></td>
                                            <td><?= $akta["type_akta"] ?></td>
                                            <td><?= $akta["seller"] ?></td>
                                            <td><?= $akta["buyer"] ?></td>
                                            <td><?= $akta["address"] ?></td>
                                            <td><?= $akta["pdf_akta"] ?></td>
                                            <td>
                                                <a href="editakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-success btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-tooltip-edit"></i>
                                                </a>
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
                                                <a onclick="return confirm('Are you sure delete this data ?')"
                                                    href="deleteakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $c++;
                                        } else if ($akta['type_akta']=='APHB') {
                                        ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $akta["no_akta"] ?></td>
                                            <td><?= $akta["type_akta"] ?></td>
                                            <td><?= $akta["seller"] ?></td>
                                            <td><?= $akta["buyer"] ?></td>
                                            <td><?= $akta["address"] ?></td>
                                            <td><?= $akta["pdf_akta"] ?></td>
                                            <td>
                                                <a href="editakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-success btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-tooltip-edit"></i>
                                                </a>
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
                                                <a onclick="return confirm('Are you sure delete this data ?')"
                                                    href="deleteakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $c++;
                                        } else if ($akta['type_akta']=='APHT') {
                                        ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $akta["no_akta"] ?></td>
                                            <td><?= $akta["type_akta"] ?></td>
                                            <td><?= $akta["seller"] ?></td>
                                            <td><?= $akta["buyer"] ?></td>
                                            <td><?= $akta["address"] ?></td>
                                            <td><?= $akta["pdf_akta"] ?></td>
                                            <td>
                                                <a href="editakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-success btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-tooltip-edit"></i>
                                                </a>
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
                                                <a onclick="return confirm('Are you sure delete this data ?')"
                                                    href="deleteakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-delete"></i>
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
                <?php
                } else if (isset($_GET['totalajb'])) {
                ?>
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-database"></i>
                            </span>List Akta
                        </h3>
                    </div>
                    <div class="d-flex mb-3" >
                        <a href="report.php?reportajb=true" class="btn btn-gradient-dark">Report AJB</a>
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
                                        <?php
                                        $q = "SELECT * FROM akta WHERE type_akta = 'AJB'";
                                        $r = mysqli_query($db,$q);
                                        $c = 1;
                                        while ($akta = mysqli_fetch_array($r)) {
                                        if ($akta['type_akta']=='AJB') {
                                        ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $akta["no_akta"] ?></td>
                                            <td><?= $akta["type_akta"] ?></td>
                                            <td><?= $akta["seller"] ?></td>
                                            <td><?= $akta["buyer"] ?></td>
                                            <td><?= $akta["address"] ?></td>
                                            <td><?= $akta["pdf_akta"] ?></td>
                                            <td>
                                                <a href="editakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-success btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-tooltip-edit"></i>
                                                </a>
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
                                                <a onclick="return confirm('Are you sure delete this data ?')"
                                                    href="deleteakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-delete"></i>
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
                <?php
                } else if (isset($_GET['totalhibah'])) {
                ?>
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-database"></i>
                            </span>List Akta
                        </h3>
                    </div>
                    <div class="d-flex mb-3" >
                        <a href="report.php?reporthibah=true" class="btn btn-gradient-dark">Report Hibah</a>
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
                                        <?php
                                            $q = "SELECT * FROM akta WHERE type_akta = 'Hibah'";
                                            $r = mysqli_query($db,$q);
                                            $c = 1;
                                            while ($akta = mysqli_fetch_array($r)) {
                                            if ($akta['type_akta']=='Hibah') {
                                            ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $akta["no_akta"] ?></td>
                                            <td><?= $akta["type_akta"] ?></td>
                                            <td><?= $akta["seller"] ?></td>
                                            <td><?= $akta["buyer"] ?></td>
                                            <td><?= $akta["address"] ?></td>
                                            <td><?= $akta["pdf_akta"] ?></td>
                                            <td>
                                                <a href="editakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-success btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-tooltip-edit"></i>
                                                </a>
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
                                                <a onclick="return confirm('Are you sure delete this data ?')"
                                                    href="deleteakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-delete"></i>
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
                <?php
                } else if (isset($_GET['totalaphb'])) {
                ?>
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-database"></i>
                            </span>List Akta
                        </h3>
                    </div>
                    <div class="d-flex mb-3" >
                        <a href="report.php?reportaphb=true" class="btn btn-gradient-dark">Report APHB</a>
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
                                        <?php
                                            $q = "SELECT * FROM akta WHERE type_akta = 'APHB'";
                                            $r = mysqli_query($db,$q);
                                            $c = 1;
                                            while ($akta = mysqli_fetch_array($r)) {
                                            if ($akta['type_akta']=='APHB') {
                                            ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $akta["no_akta"] ?></td>
                                            <td><?= $akta["type_akta"] ?></td>
                                            <td><?= $akta["seller"] ?></td>
                                            <td><?= $akta["buyer"] ?></td>
                                            <td><?= $akta["address"] ?></td>
                                            <td><?= $akta["pdf_akta"] ?></td>
                                            <td>
                                                <a href="editakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-success btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-tooltip-edit"></i>
                                                </a>
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
                                                <a onclick="return confirm('Are you sure delete this data ?')"
                                                    href="deleteakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-delete"></i>
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
                <?php
                } else if (isset($_GET['totalapht'])) {
                ?>
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                                <i class="mdi mdi-database"></i>
                            </span>List Akta
                        </h3>
                    </div>
                    <div class="d-flex mb-3" >
                        <a href="report.php?reportapht=true" class="btn btn-gradient-dark">Report APHB</a>
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
                                        <?php
                                            $q = "SELECT * FROM akta WHERE type_akta = 'APHT'";
                                            $r = mysqli_query($db,$q);
                                            $c = 1;
                                            while ($akta = mysqli_fetch_array($r)) {
                                            if ($akta['type_akta']=='APHT') {
                                            ?>
                                        <tr>
                                            <td><?= $c ?></td>
                                            <td><?= $akta["no_akta"] ?></td>
                                            <td><?= $akta["type_akta"] ?></td>
                                            <td><?= $akta["seller"] ?></td>
                                            <td><?= $akta["buyer"] ?></td>
                                            <td><?= $akta["address"] ?></td>
                                            <td><?= $akta["pdf_akta"] ?></td>
                                            <td>
                                                <a href="editakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-success btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-tooltip-edit"></i>
                                                </a>
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
                                                <a onclick="return confirm('Are you sure delete this data ?')"
                                                    href="deleteakta.php?id=<?= $akta['id'] ?>"
                                                    class="btn btn-inverse-danger btn-rounded btn-icon"
                                                    style="padding-top: 12px;">
                                                    <i class="mdi mdi-delete"></i>
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
                <?php
                }
                ?>
                <!-- Content End -->
                <!-- Footer Start -->
                <?php require "partials/footer.php" ?>
                <!-- Footer End -->
            </div>
        </div>
    </div>
</body>

</html>