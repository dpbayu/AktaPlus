<?php
session_start();
require  "../include/db.php";
if (!isset($_GET['id'])){
    header("Location: index.php");
    exit();
} else {
    $id = $_GET['id'];
    $sql = "DELETE FROM akta WHERE id = '$id'";
    if (mysqli_query($db, $sql)) {
        header("Location: listakta.php?message= Data success deleted");
        exit();
    } else {
        header("Location: listakta.php?message=Data failed delete");
        exit();    
    }
}
?>