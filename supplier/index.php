<?php
include '../koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM supplier");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Supplier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
        }
        h2 {
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
    <h2>Data Supplier</h2>
    <a href="tambah.php" class="tambah">+ Tambah Supplier</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Supplier</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_supplier'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="edit">Edit</a>
                |
                <a href="hapus.php?id=<?= $row['id'] ?>"
                   class="hapus"
                   onclick="return confirm('Yakin hapus data?')">
                   Hapus
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
