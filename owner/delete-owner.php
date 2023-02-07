<?php
require "../include/db.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM owner WHERE id = $id";
    $run = mysqli_query($db,$query);
    if ($run) {
        echo "<script>window.location.href='owner.php?message=Delete data success!';</script>";                    
        }
}
?>