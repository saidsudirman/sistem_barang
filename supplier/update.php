<?php
include '../koneksi.php';

$id     = $_POST['id'];
$nama   = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,
    "UPDATE supplier 
     SET nama_supplier='$nama', alamat='$alamat'
     WHERE id='$id'"
);

header("Location: index.php");
