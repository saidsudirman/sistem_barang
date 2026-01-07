<?php
include '../koneksi.php';

$nama   = $_POST['nama_supplier'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO supplier (nama_supplier, alamat)
          VALUES ('$nama', '$alamat')";

if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
