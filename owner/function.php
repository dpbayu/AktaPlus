<?php
session_start();
require "../include/db.php";

// Add Admin Start
if (isset($_POST['add-admin'])) {
    // print_r($_POST);
    $nik = $_POST['nik'];
    $fullname = $_POST['fullname'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $result = mysqli_query($db, "SELECT nik FROM user WHERE nik ='$nik'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>window.location.href='user.php?failed=NIK already exist!';</script>";                    
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = mysqli_query($db, "INSERT INTO user (nik, fullname, role, password) VALUES ('$nik', '$fullname', '$role', '$password')");
    if ($query) {
        echo "<script>window.location.href='user.php?message=Sucess added!';</script>";                    
    }
    else {
        echo "<script>window.location.href='user.php?message=Failed added!';</script>";                    
    }
}
// Add Admin End

// Add Owner Start
if (isset($_POST['add-owner'])) {
    // print_r($_POST);
    $username = $_POST['username'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $result = mysqli_query($db, "SELECT username FROM owner WHERE username ='$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>window.location.href='owner.php?failed=Username already exist!';</script>";                    
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = mysqli_query($db, "INSERT INTO owner (username, role, password) VALUES ('$username', '$role', '$password')");
    if ($query) {
        echo "<script>window.location.href='owner.php?message=Sucess added!';</script>";                    
    }
    else {
        echo "<script>window.location.href='owner.php?message=Failed added!';</script>";                    
    }
}
// Add Owner End

// Update Profile Start
if (isset($_POST['update'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $admin_profile = $_FILES['profilepic']['name'];
    $imgtemp = $_FILES['profilepic']['tmp_name'];
    if ($imgtemp=='') {
        $id = $_SESSION['id'];
        $q = "SELECT * FROM owner WHERE id = '$id'";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $admin_profile = $d['admin_profile'];
    }
    move_uploaded_file($imgtemp,"assets/images/$admin_profile");
    if (empty($username)) {
        echo "Field still empty";
    } else {
            if (empty($password)) {
                $id = $_SESSION['id'];
                $sql = "UPDATE owner SET username = '$username', admin_profile = '$admin_profile' WHERE id = '$id'";
                if (mysqli_query($db, $sql)) {
                    $_SESSION['username'] = $username;
                    $_SESSION['admin_profile'] = $admin_profile;
                    echo "<script type='text/javascript'>document.location.href = 'profile.php';</script>";
                } else {
                    echo "Error";
                }
            } else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $id = $_SESSION['id'];
                $sql2 = "UPDATE owner SET username = '$username', password = '$hash' WHERE id = '$id'";
                if (mysqli_query($db, $sql2)) {
                    session_unset();
                    session_destroy();
                    echo "<script>alert('Password success changed, please login again');
                    document.location.href = '../owner.php';
                    </script>";
                } else {
                echo "error";
            }
        }
    }
}
// Update Profile End
?>