<?php
session_start();
include 'koneksi.php';

$user = $_POST['username'];
$pass = md5($_POST['password']);

$query = mysqli_query($koneksi,
    "SELECT * FROM users WHERE username='$user' AND password='$pass'"
);

if (mysqli_num_rows($query) > 0) {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
} else {
    echo "Login gagal";
}
