<?php
session_start();
require "../include/db.php";

// Login Start
if (isset($_POST['login'])) {
$nik = mysqli_escape_string($db, $_POST['nik']);
$password = mysqli_escape_string($db, $_POST['password']);
    // pengecekan nik
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
                $_SESSION['id'] = $row['id'];
                $_SESSION['nik'] = $row['nik'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['profile_pic'] = $row['profile_pic'];
                $_SESSION['role'] = $row['role'];
                header("Location: index.php");
                exit();
            }
        }
    }
}
// Login End

// Query Start
function query ($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// Query End

// Add data Start
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
            move_uploaded_file($file_tmp, '../assets/file/'.$pdf_akta);
            $query = mysqli_query($db, "INSERT INTO akta (no_akta, type_akta, seller, buyer, no_hak, address, surface_area, transaction, certificate, pbb, njop, ssp, ssb, description, pdf_akta) VALUES ('$no_akta', '$type_akta', '$seller', '$buyer', '$no_hak', '$address', '$surface_area', '$transaction', '$certificate', '$pbb', '$njop', '$ssp', '$ssb', '$description', '$pdf_akta')");
            if ($query) {
                echo "<script>window.location.href='listakta.php?viewakta=true';</script>";                    
            }
            else {
                echo "<script>window.location.href='formakta.php';</script>";                    
            }
        }
        else {
            echo 'UKURAN FILE TERLALU BESAR!';
        }
    }
}
// Add data End

// Update Profile Start
if (isset($_POST['update'])) {
    $nik = mysqli_real_escape_string($db, $_POST['nik']);
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $imagename = time().$_FILES['profile_pic']['name'];
    $imgtemp = $_FILES['profile_pic']['tmp_name'];
    if($imgtemp==''){
        $q = "SELECT * FROM user WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['profile_pic'];
    }
    if (empty($nik) OR empty($fullname)) {
        echo "Field still empty";
    } else {
            if (empty($password)) {
                move_uploaded_file($imgtemp,"../assets/image/$imagename");
                $id = $_SESSION['id'];
                $sql = "UPDATE user SET nik = '$nik', fullname = '$fullname', profile_pic = '$imagename' WHERE id = '$id'";
                if (mysqli_query($db, $sql)) {
                    $_SESSION['nik'] = $nik;
                    $_SESSION['fullname'] = $fullname;
                    $_SESSION['profile_pic'] = $imagename;
                    echo "<script type='text/javascript'>document.location.href = 'profile.php';</script>";
                } else {
                    echo "Error";
                }
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $id = $_SESSION['id'];
                $sql2 = "UPDATE user SET nik = '$nik', fullname = '$fullname', profile_pic = '$imagename', password = '$hash' WHERE id = '$id'";
                if (mysqli_query($db, $sql2)) {
                    session_unset();
                    session_destroy();
                    echo "<script>alert('Password success changed, please login again');
                    document.location.href = 'login.php';
                    </script>";
                } else {
                echo "error";
            }
        }
    }
}
// Update Profile End
?>