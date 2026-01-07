<?php
include '../koneksi.php';

$id   = $_POST['id'];
$nama = $_POST['nama_kategori'];

mysqli_query($koneksi,
    "UPDATE kategori SET nama_kategori='$nama' WHERE id='$id'"
);

header("Location: index.php");
