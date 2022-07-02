<?php
require 'functions.php';
$pemesanan = query("SELECT * FROM pemesanan");
?>
<?php include 'layout/index.html'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Junk Collector</title>
</head>
<body>
    
<h1>Data Pemesanan</h1>
<br>

<a class="btn btn-outline-dark" href="tambahpemesanan.php">Tambah data pemesanan</a>
<br><br>

<div class="table-responsive">
    <table class="table table-bordered">
    <thead class="thead-dark">

        <tr>
            <th scope="col">No.</th>
            <th scope="col">ID pemesanan</th>
            <th scope="col">ID pengguna</th>
            <th scope="col">Lokasi pemesanan</th>
            <th scope="col">Waktu pesan</th>
            <th scope="col">Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $pemesanan as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["id_pemesanan"]; ?></td>
            <td><?= $row["id_pengguna"]; ?></td>
            <td><?= $row["lokasi_pemesanan"]; ?></td>
            <td><?= $row["waktu_pesan"]; ?></td>
            <td>
                <a class="btn btn-outline-primary" href="editpemesanan.php?id=<?= $row["id_pemesanan"]; ?>">Edit</a>
                <a class="btn btn-outline-danger" href="hapuspemesanan.php?id=<?= $row["id_pemesanan"]; ?>" onclick="
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
