<?php
include '../auth.php';
include '../koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id'");
$b = mysqli_fetch_assoc($data);

$kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
$supplier = mysqli_query($koneksi, "SELECT * FROM supplier");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
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
            background: #0d6efd;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #084298;
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
    <h3>Edit Barang</h3>

    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?= $b['id'] ?>">

        <label>Nama Barang</label>
        <input type="text" name="nama_barang" value="<?= $b['nama_barang'] ?>" required>

        <label>Kategori</label>
        <select name="kategori_id" required>
            <?php while ($k = mysqli_fetch_assoc($kategori)) { ?>
                <option value="<?= $k['id'] ?>"
                    <?= $b['kategori_id'] == $k['id'] ? 'selected' : '' ?>>
                    <?= $k['nama_kategori'] ?>
                </option>
            <?php } ?>
        </select>

        <label>Supplier</label>
        <select name="supplier_id" required>
            <?php while ($s = mysqli_fetch_assoc($supplier)) { ?>
                <option value="<?= $s['id'] ?>"
                    <?= $b['supplier_id'] == $s['id'] ? 'selected' : '' ?>>
                    <?= $s['nama_supplier'] ?>
                </option>
            <?php } ?>
        </select>

        <label>Stok</label>
        <input type="number" name="stok" value="<?= $b['stok'] ?>" required>

        <label>Harga</label>
        <input type="number" name="harga" value="<?= $b['harga'] ?>" required>

        <button type="submit">Update</button>
    </form>

    <a href="index.php" class="back">← Kembali ke Data Barang</a>
</div>

</body>
</html>
