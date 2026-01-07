<?php
include '../koneksi.php';

$id       = $_POST['id'];
$nama     = $_POST['nama_barang'];
$kategori = $_POST['kategori_id'];
$supplier = $_POST['supplier_id'];
$stok     = $_POST['stok'];
$harga    = $_POST['harga'];

mysqli_query($koneksi, "
    UPDATE barang SET
    nama_barang='$nama',
    kategori_id='$kategori',
    supplier_id='$supplier',
    stok='$stok',
    harga='$harga'
    WHERE id='$id'
");

header("Location: index.php");
