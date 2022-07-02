<?php
require 'functions.php';
$barang = query("SELECT * FROM barang_jual");
?>
<?php include 'layout/index.html'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Junk Collector</title>
</head>
<body>
    
<h1>Daftar barang yang bisa dijual</h1>
<br>

<a class="btn btn-outline-dark" href="tambahbarang.php">Tambah data barang</a>

<br><br>

<div class="table-responsive">
    <table class="table table-bordered">
    <thead class="thead-dark">

        <tr>
            <th scope="col">No.</th>
            <th scope="col">ID barang</th>
            <th scope="col">Jenis barang </th>
            <th scope="col">Harga perkilo</th>
            <th scope="col">Aksi</th>
        </tr>


        <?php $i = 1; ?>
        <?php foreach( $barang as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["id_barang_jual"]; ?></td>
            <td><?= $row["jenis"]; ?></td>
            <td><?= $row["harga_perkilo"]; ?></td>
            <td>
                <a class="btn btn-outline-primary" href="editbarang.php?id=<?= $row["id_barang_jual"]; ?>">Edit</a>
                <a class="btn btn-outline-danger"href="hapusbarang.php?id=<?= $row["id_barang_jual"]; ?>" onclick="
                return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </thead>
    </table>
</div>

</body>
</html>
