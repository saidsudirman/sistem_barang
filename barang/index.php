<?php
include '../auth.php';
include '../koneksi.php';

$data = mysqli_query($koneksi, "
    SELECT barang.*, kategori.nama_kategori, supplier.nama_supplier
    FROM barang
    LEFT JOIN kategori ON barang.kategori_id = kategori.id
    LEFT JOIN supplier ON barang.supplier_id = supplier.id
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }
        .container {
            width: 90%;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h3 {
            margin-bottom: 15px;
        }
        a.tambah {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 15px;
            background: #198754;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background: #0d6efd;
            color: white;
        }
        a.edit {
            background: #ffc107;
            color: black;
            padding: 6px 10px;
            text-decoration: none;
            border-radius: 4px;
        }
        a.hapus {
            background: #dc3545;
            color: white;
            padding: 6px 10px;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="container">
    <h3>Data Barang</h3>
    <a href="tambah.php" class="tambah">+ Tambah Barang</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Supplier</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; while ($b = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $b['nama_barang'] ?></td>
            <td><?= $b['nama_kategori'] ?></td>
            <td><?= $b['nama_supplier'] ?></td>
            <td><?= $b['stok'] ?></td>
            <td>Rp <?= number_format($b['harga'], 0, ',', '.') ?></td>
            <td>
                <a href="edit.php?id=<?= $b['id'] ?>" class="edit">Edit</a>
                |
                <a href="hapus.php?id=<?= $b['id'] ?>"
                   class="hapus"
                   onclick="return confirm('Hapus data?')">
                   Hapus
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
