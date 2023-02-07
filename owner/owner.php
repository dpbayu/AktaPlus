<!-- PHP Start -->
<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../owner.php");
    exit;
}
require "../include/db.php";
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
                                <i class="mdi mdi-account-key"></i>
                            </span>Add Owner
                        </h3>
                    </div>
                    <div class="row d-flex justify-content-between bg-white">
                        <?php
                        if (isset($_GET['message'])) {
                            $msg = $_GET['message'];
                            echo '
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>'.$msg.'</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                        }
                    ?>
                        <?php
                        if (isset($_GET['failed'])) {
                            $fail = $_GET['failed'];
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>'.$fail.'</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                        }
                    ?>
                        <div class="col-md-5 py-3">
                            <form role="form" action="function.php" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="TypeAkta">Type Akta</label>
                                        <select class="form-control" style="height: 50px;" id="TypeAkta" name="role">
                                            <option>Owner</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" name="add-owner" class="btn btn-primary">Add
                                    Owner</button>
                            </form>
                        </div>
                        <div class="col-md-7 py-3">
                            <table class="table table-hover" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Profile</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $q = "SELECT * FROM owner";
                                    $r = mysqli_query($db,$q);
                                    $c = 1;
                                    while ($owner = mysqli_fetch_array($r)) {
                                    ?>
                                    <tr style="width: fit-content;">
                                        <td><?= $c ?></td>
                                        <td><?= $owner['username'] ?></td>
                                        <td><img style="height: 75px; width:75px;"
                                                src="assets/images/<?= $owner['admin_profile'] ?>">
                                        </td>
                                        <td>
                                            <a class="text-decoration-none" href="delete-owner.php?id=<?= $owner["id"]; ?>"
                                                onclick="return confirm('Are you sure?');">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                    $c++;
                                    } 
                                    ?>
                                </tbody>
                            </table>
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