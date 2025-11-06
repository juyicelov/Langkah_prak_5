<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" && $password == "") {
    echo "<script>alert('Username dan Password belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
} else {
    
    if ($username == "admin" && $password == "admin123") {
        $_SESSION['login'] = 1;
        $_SESSION['username'] = $username;
        header('location:index.php');
    } else {
        echo "<script>alert('Login Gagal, Silahkan Coba Lagi')</script>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    }
}
?>
