<?php
include '../koneksi.php';

$nama      = $_POST['nama_barang'];
$kategori  = $_POST['kategori_id'];
$supplier  = $_POST['supplier_id'];
$stok      = $_POST['stok'];
$harga     = $_POST['harga'];

mysqli_query($koneksi, "
    INSERT INTO barang 
    VALUES (NULL, '$nama', '$kategori', '$supplier', '$stok', '$harga')
");

header("Location: index.php");
