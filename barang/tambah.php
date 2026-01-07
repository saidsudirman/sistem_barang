<?php
include '../auth.php';
include '../koneksi.php';

$kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
$supplier = mysqli_query($koneksi, "SELECT * FROM supplier");
?>

<h3>Tambah Barang</h3>

<form method="POST" action="simpan.php">
    Nama Barang <br>
    <input type="text" name="nama_barang" required><br><br>

    Kategori <br>
    <select name="kategori_id" required>
        <option value="">-- Pilih --</option>
        <?php while ($k = mysqli_fetch_assoc($kategori)) { ?>
            <option value="<?= $k['id'] ?>"><?= $k['nama_kategori'] ?></option>
        <?php } ?>
    </select><br><br>

    Supplier <br>
    <select name="supplier_id" required>
        <option value="">-- Pilih --</option>
        <?php while ($s = mysqli_fetch_assoc($supplier)) { ?>
            <option value="<?= $s['id'] ?>"><?= $s['nama_supplier'] ?></option>
        <?php } ?>
    </select><br><br>

    Stok <br>
    <input type="number" name="stok" required><br><br>

    Harga <br>
    <input type="number" name="harga" required><br><br>

    <button type="submit">Simpan</button>
</form>
