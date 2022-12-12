<?php
session_start();
require "../include/db.php";

// Login
if (isset($_POST['login'])) {
    $nik = mysqli_escape_string($db, $_POST['nik']);
    $password = mysqli_escape_string($db, $_POST['password']);
    // pengecekan email
    $sql = "SELECT * FROM user WHERE nik = '$nik'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) <=0 ) {
        header("Location: login.php?message=Login Gagal");
        exit();
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            if (!password_verify($password, $row['password'])) {
                header("Location: login.php?message=Password Salah");
                exit();
            } else if (password_verify($password, $row['password'])) {
                $_SESSION['nik'] = $row['nik'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['role'] = $row['role'];
                header("Location: index.php");
                exit();
            }
        }
    }
}

// Ambil data
function query ($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Tambah data
if (isset($_POST['add-akta'])) {
    // print_r($_POST);
    $no_akta = $_POST['no_akta'];
    $type_akta = $_POST['type_akta'];
    $seller = $_POST['seller'];
    $buyer = $_POST['buyer'];
    $no_hak = $_POST['no_hak'];
    $address = $_POST['address'];
    $surface_area = $_POST['surface_area'];
    $transaction = $_POST['transaction'];
    $certificate = $_POST['certificate'];
    $pbb = $_POST['pbb'];
    $njop = $_POST['njop'];
    $ssp = $_POST['ssp'];
    $ssb = $_POST['ssb'];
    $description = $_POST['description'];
    $pdf_akta = $_FILES['pdf_akta']['name'];
    $extention_file	= array('pdf','docx');
    $text = explode('.', $pdf_akta);
    $extention = strtolower(end($text));
    $ukuran = $_FILES['pdf_akta']['size'];
    $file_tmp = $_FILES['pdf_akta']['tmp_name'];
    if (in_array($extention, $extention_file) === true) {
        if ($ukuran < 1044070) { 
            move_uploaded_file($file_tmp, 'assets/'.$pdf_akta);
            $query = mysqli_query($db, "INSERT INTO akta (no_akta, type_akta, seller, buyer, no_hak, address, surface_area, transaction, certificate, pbb, njop, ssp, ssb, description, pdf_akta) VALUES ('$no_akta', '$type_akta', '$seller', '$buyer', '$no_hak', '$address', '$surface_area', '$transaction', '$certificate', '$pbb', '$njop', '$ssp', '$ssb', '$description', '$pdf_akta')");
            if ($query) {
                echo "<script>window.location.href='../admin/listakta.php';</script>";                    
            }
            else {
                echo "<script>window.location.href='../admin/formakta.php';</script>";                    
            }
        }
        else {
            echo 'UKURAN FILE TERLALU BESAR!';
        }
    }
}

?>