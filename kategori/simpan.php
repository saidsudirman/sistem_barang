<?php
include '../koneksi.php';

$nama = $_POST['nama_kategori'];

mysqli_query($koneksi,
    "INSERT INTO kategori VALUES (NULL, '$nama')"
);

header("Location: index.php");
