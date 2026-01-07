<?php
include 'auth.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Sistem Data Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
        }
        .navbar {
            background: #0d6efd;
            color: white;
            padding: 15px 25px;
        }
        .navbar h2 {
            margin: 0;
        }
        .container {
            width: 90%;
            margin: 30px auto;
        }
        .menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }
        .card {
            background: white;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card a {
            text-decoration: none;
            color: white;
            padding: 12px 20px;
            background: #198754;
            border-radius: 5px;
            display: inline-block;
            margin-top: 15px;
        }
        .logout {
            background: #dc3545 !important;
        }
    </style>
</head>
<body>

<div class="navbar">
    <h2>Dashboard Sistem Data Barang</h2>
</div>

<div class="container">
    <div class="menu">

        <div class="card">
            <h3>Data Barang</h3>
            <a href="barang/index.php">Kelola</a>
        </div>

        <div class="card">
            <h3>Data Kategori</h3>
            <a href="kategori/index.php">Kelola</a>
        </div>

        <div class="card">
            <h3>Data Supplier</h3>
            <a href="supplier/index.php">Kelola</a>
        </div>

        <div class="card">
            <h3>Logout</h3>
            <a href="logout.php" class="logout">Keluar</a>
        </div>

    </div>
</div>

</body>
</html>
