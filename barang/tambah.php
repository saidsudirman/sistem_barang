<?php
include '../auth.php';
include '../koneksi.php';

$kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
$supplier = mysqli_query($koneksi, "SELECT * FROM supplier");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }
        .container {
            width: 500px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #198754;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #146c43;
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h3>Tambah Barang</h3>

    <form method="POST" action="simpan.php">

        <label>Nama Barang</label>
        <input type="text" name="nama_barang" required>

        <label>Kategori</label>
        <select name="kategori_id" required>
            <option value="">-- Pilih Kategori --</option>
            <?php while ($k = mysqli_fetch_assoc($kategori)) { ?>
                <option value="<?= $k['id'] ?>">
                    <?= $k['nama_kategori'] ?>
                </option>
            <?php } ?>
        </select>

        <label>Supplier</label>
        <select name="supplier_id" required>
            <option value="">-- Pilih Supplier --</option>
            <?php while ($s = mysqli_fetch_assoc($supplier)) { ?>
                <option value="<?= $s['id'] ?>">
                    <?= $s['nama_supplier'] ?>
                </option>
            <?php } ?>
        </select>

        <label>Stok</label>
        <input type="number" name="stok" required>

        <label>Harga</label>
        <input type="number" name="harga" required>

        <button type="submit">Simpan</button>
    </form>

    <a href="index.php" class="back">← Kembali ke Data Barang</a>
</div>

</body>
</html>
