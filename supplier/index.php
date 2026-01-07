<?php
include '../auth.php';
include '../koneksi.php';

$data = mysqli_query($koneksi, "SELECT * FROM supplier");
?>

<h3>Data Supplier</h3>
<a href="tambah.php">Tambah Supplier</a>

<table border="1">
<tr>
    <th>No</th>
    <th>Nama Supplier</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php $no=1; while ($s = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $s['nama_supplier'] ?></td>
    <td><?= $s['alamat'] ?></td>
    <td>
        <a href="edit.php?id=<?= $s['id'] ?>">Edit</a>
        <a href="hapus.php?id=<?= $s['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
