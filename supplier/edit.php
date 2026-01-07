<?php
include '../koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi,
    "SELECT * FROM supplier WHERE id='$id'"
);
$s = mysqli_fetch_assoc($data);
?>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $s['id'] ?>">
    
    <input type="text" name="nama_supplier" value="<?= $s['nama_supplier'] ?>"><br>
    <textarea name="alamat"><?= $s['alamat'] ?></textarea><br>

    <button type="submit">Update</button>
</form>
