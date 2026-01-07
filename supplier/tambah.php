<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Supplier</title>
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
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input, textarea {
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
    </style>
</head>
<body>

<div class="container">
    <h2>Tambah Supplier</h2>
    <form method="POST" action="simpan.php">
        <label>Nama Supplier</label>
        <input type="text" name="nama_supplier" required>

        <label>Alamat</label>
        <textarea name="alamat" rows="4"></textarea>

        <button type="submit">Simpan</button>
    </form>
    <a href="index.php" class="back">← Kembali ke Data Supplier/</a>
</div>

</body>
</html>
