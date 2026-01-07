<?php
include '../koneksi.php';

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$id = $_GET['id'];


mysqli_query($koneksi, "DELETE FROM barang WHERE id='$id'");

header("Location: index.php");
