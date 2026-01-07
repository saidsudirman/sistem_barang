<?php
include '../auth.php';
include '../koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id'");
$b = mysqli_fetch_assoc($data);

$kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
$supplier = mysqli_query($koneksi, "SELECT * FROM supplier");
?>

<h3>Edit Barang</h3>

<form method="POST" action="update.php">
<input type="hidden" name="id" value="<?= $b['id'] ?>">

Nama Barang <br>
<input type="text" name="nama_barang" value="<?= $b['nama_barang'] ?>"><br><br>

Kategori <br>
<select name="kategori_id">
<?php while ($k = mysqli_fetch_assoc($kategori)) { ?>
<option value="<?= $k['id'] ?>" <?= $b['kategori_id']==$k['id']?'selected':'' ?>>
    <?= $k['nama_kategori'] ?>
</option>
<?php } ?>
</select><br><br>

Supplier <br>
<select name="supplier_id">
<?php while ($s = mysqli_fetch_assoc($supplier)) { ?>
<option value="<?= $s['id'] ?>" <?= $b['supplier_id']==$s['id']?'selected':'' ?>>
    <?= $s['nama_supplier'] ?>
</option>
<?php } ?>
</select><br><br>

Stok <br>
<input type="number" name="stok" value="<?= $b['stok'] ?>"><br><br>

Harga <br>
<input type="number" name="harga" value="<?= $b['harga'] ?>"><br><br>

<button type="submit">Update</button>
</form>
