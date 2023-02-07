<?php
require("../include/db.php");

// Query Start
function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// Query End

// Add Data Start
function add ($data) {
    global $db;
    $no_akta = $data['no_akta'];
    $type_akta = $data['type_akta'];
    $seller = $data['seller'];
    $buyer = $data['buyer'];
    $no_hak = $data['no_hak'];
    $address = $data['address'];
    $surface_area = $data['surface_area'];
    $transaction = $data['transaction'];
    $certificate = $data['certificate'];
    $pbb = $data['pbb'];
    $njop = $data['njop'];
    $ssp = $data['ssp'];
    $ssb = $data['ssb'];
    $description = $data['description'];
    $pdf_akta = $_FILES['pdf_akta']['name'];
    $extention_file	= array('pdf','docx');
    $text = explode('.', $pdf_akta);
    $extention = strtolower(end($text));
    $ukuran = $_FILES['pdf_akta']['size'];
    $file_tmp = $_FILES['pdf_akta']['tmp_name'];
    if (in_array($extention, $extention_file) === true) {
        if ($ukuran < 2000000) { 
            move_uploaded_file($file_tmp, '../assets/file/'.$pdf_akta);
            $query = mysqli_query($db, "INSERT INTO akta (no_akta, type_akta, seller, buyer, no_hak, address, surface_area, transaction, certificate, pbb, njop, ssp, ssb, description, pdf_akta) VALUES ('$no_akta', '$type_akta', '$seller', '$buyer', '$no_hak', '$address', '$surface_area', '$transaction', '$certificate', '$pbb', '$njop', '$ssp', '$ssb', '$description', '$pdf_akta')");
            if ($query) {
                echo "<script>window.location = 'listakta.php?message=Data successfuly added!'</script>";
            }
            else {
                echo "<script>window.location = 'listakta.php?message=Data failed added'</script>";
            }
        }
        else {
            echo 'Size to big!';
        }
    }
}
// Add data End

// Edit Data Start
function edit ($data) {
    global $db;
    $no_akta = $data['no_akta'];
    $type_akta = $data['type_akta'];
    $seller = $data['seller'];
    $buyer = $data['buyer'];
    $no_hak = $data['no_hak'];
    $address = $data['address'];
    $surface_area = $data['surface_area'];
    $transaction = $data['transaction'];
    $certificate = $data['certificate'];
    $pbb = $data['pbb'];
    $njop = $data['njop'];
    $ssp = $data['ssp'];
    $ssb = $data['ssb'];
    $description = $data['description'];
    $pdf_akta = $_FILES['pdf_akta']['name'];
    $extention_file	= array('pdf','docx');
    $text = explode('.', $pdf_akta);
    $extention = strtolower(end($text));
    $ukuran = $_FILES['pdf_akta']['size'];
    $file_tmp = $_FILES['pdf_akta']['tmp_name'];
    if (in_array($extention, $extention_file) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, '../assets/file/'.$pdf_akta);
            $query = mysqli_query($db, "UPDATE akta SET no_akta = '".$no_akta."', type_akta = '".$type_akta."', seller = '".$seller."', buyer = '".$buyer."', no_hak = '".$no_hak."', address = '".$address."', surface_area = '".$surface_area."', transaction = '".$transaction."', certificate = '".$certificate."', pbb = '".$pbb."', njop = '".$njop."', ssp = '".$ssp."', ssb = '".$ssb."', description = '".$description."', pdf_akta = '".$pdf_akta."' WHERE id = '".$_GET['id']."'");
            if ($query) {
                echo "<script>window.location = 'listakta.php?message=Data successfuly update!'</script>";
                exit();                
            } else {
                echo "<script>window.location = 'listakta.php?message=Data failed update'</script>";
                exit();                   
            }
        }
    }  else {
        $query = mysqli_query($db, "UPDATE akta SET no_akta = '".$no_akta."', type_akta = '".$type_akta."', seller = '".$seller."', buyer = '".$buyer."', no_hak = '".$no_hak."', address = '".$address."', surface_area = '".$surface_area."', transaction = '".$transaction."', certificate = '".$certificate."', pbb = '".$pbb."', njop = '".$njop."', ssp = '".$ssp."', ssb = '".$ssb."', description = '".$description."' WHERE id = '".$_GET['id']."'");
        if ($query) {
            echo "<script>window.location = 'listakta.php?message=Data successfuly update!'</script>";
            exit();                          
        } else {
            echo "<script>window.location = 'listakta.php?message=Data failed update'</script>";
            exit();                          
        }
    }
}
// Edit data End

// Update Profile Start
function update($data) {
    global $db;
    $nik = mysqli_real_escape_string($db, $data['nik']);
    $fullname = mysqli_real_escape_string($db, $data['fullname']);
    $password = mysqli_real_escape_string($db, $data['password']);
    $user_profile = $_FILES['profilepic']['name'];
    $imgtemp = $_FILES['profilepic']['tmp_name'];
    if ($imgtemp=='') {
        $id = $_SESSION['id'];
        $q = "SELECT * FROM user WHERE id = '$id'";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $user_profile = $d['user_profile'];
    }
    move_uploaded_file($imgtemp,"../assets/img/$user_profile");
    if (empty($nik) OR empty($fullname)) {
        echo "Field still empty";
    } else {
            if (empty($password)) {
                $id = $_SESSION['id'];
                $sql = "UPDATE user SET nik = '$nik', fullname = '$fullname', user_profile = '$user_profile' WHERE id = '$id'";
                if (mysqli_query($db, $sql)) {
                    $_SESSION['nik'] = $nik;
                    $_SESSION['fullname'] = $fullname;
                    $_SESSION['user_profile'] = $user_profile;
                    echo "<script type='text/javascript'>document.location.href = 'profile.php';</script>";
                } else {
                    echo "Error";
                }
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $id = $_SESSION['id'];
                $sql2 = "UPDATE user SET nik = '$nik', fullname = '$fullname', password = '$hash' WHERE id = '$id'";
                if (mysqli_query($db, $sql2)) {
                    session_unset();
                    session_destroy();
                    echo "<script>alert('Password success changed, please login again');
                    document.location.href = '../index.php';
                    </script>";
                } else {
                echo "error";
            }
        }
    }
}
// Update Profile End
?>