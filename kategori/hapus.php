<?php
include '../koneksi.php';

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$id = $_GET['id'];

$query = "DELETE FROM kategori WHERE id='$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Gagal hapus data: " . mysqli_error($koneksi);
}
