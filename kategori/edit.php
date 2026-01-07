<?php
include '../koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi,
    "SELECT * FROM kategori WHERE id='$id'"
);
$k = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kategori</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }
        .container {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 10px;
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
    <h3>Edit Kategori</h3>

    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?= $k['id'] ?>">

        <label>Nama Kategori</label>
        <input type="text" name="nama_kategori"
               value="<?= $k['nama_kategori'] ?>" required>

        <button type="submit">Update</button>
    </form>

    <a href="index.php" class="back">← Kembali ke Data Kategori</a>
</div>

</body>
</html>
