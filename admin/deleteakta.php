<?php
session_start();
if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require  "../include/db.php";
if (!isset($_GET['id'])){
    header("Location: index.php");
    exit();
} else {
    $id = $_GET['id'];
    $sql = "DELETE FROM akta WHERE id = '$id'";
    if (mysqli_query($db, $sql)) {
        header("Location: listakta.php?message=Data successfully delete");
        exit();
    } else {
        header("Location: listakta.php?message=Data failed delete");
        exit();    
    }
}
?>