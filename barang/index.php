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

<h3>Data Barang</h3>
<a href="tambah.php">Tambah Barang</a>

<table border="1" cellpadding="5">
<tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Kategori</th>
    <th>Supplier</th>
    <th>Stok</th>
    <th>Harga</th>
    <th>Aksi</th>
</tr>

<?php $no=1; while ($b = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $b['nama_barang'] ?></td>
    <td><?= $b['nama_kategori'] ?></td>
    <td><?= $b['nama_supplier'] ?></td>
    <td><?= $b['stok'] ?></td>
    <td><?= number_format($b['harga']) ?></td>
    <td>
        <a href="edit.php?id=<?= $b['id'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $b['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
