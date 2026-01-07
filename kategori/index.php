<?php
include '../auth.php';
include '../koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM kategori");
?>

<h3>Data Kategori</h3>
<a href="tambah.php">Tambah Kategori</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1;
    while ($k = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $k['nama_kategori'] ?></td>
            <td>
                <a href="edit.php?id=<?= $k['id'] ?>">Edit</a>
                <a href="hapus.php?id=<?= $k['id'] ?>" onclick="return konfirmasiHapus()">
                    Hapus
                </a>


            </td>
        </tr>
    <?php } ?>
</table>