<?php
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi,
    "SELECT * FROM kategori WHERE id='$id'"
);
$k = mysqli_fetch_assoc($data);
?>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $k['id'] ?>">
    <input type="text" name="nama_kategori" value="<?= $k['nama_kategori'] ?>">
    <button type="submit">Update</button>
</form>
