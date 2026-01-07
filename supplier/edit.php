<?php
include '../koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Supplier</title>
    <style>
        body { font-family: Arial; background:#f4f6f8; }
        .container {
            width: 400px;
            margin: 80px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
        }
        button {
            padding: 10px;
            width: 100%;
            background: #0d6efd;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Supplier</h2>
    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <label>Nama Supplier</label>
        <input type="text" name="nama_supplier" 
               value="<?= $row['nama_supplier'] ?>" required>

        <label>Alamat</label>
        <textarea name="alamat"><?= $row['alamat'] ?></textarea>

        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>
