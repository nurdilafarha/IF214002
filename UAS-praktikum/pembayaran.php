<?php
require 'functions.php';
$pembayaran = query("SELECT * FROM pembayaran");
?>
<?php include 'layout/index.html'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Junk Collector</title>
</head>
<body>
    
<h1>Data Pembayaran</h1>
<br>

<a class="btn btn-outline-dark" href="tambahpembayaran.php">Tambah data pembayaran</a>
<br><br>

<div class="table-responsive">
    <table class="table table-bordered">
    <thead class="thead-dark">

        <tr>
            <th scope="col">No.</th>
            <th scope="col">ID pembayaran</th>
            <th scope="col">ID detail pemesanan</th>
            <th scope="col">Waktu bayar</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $pembayaran as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["id_pembayaran"]; ?></td>
            <td><?= $row["id_det_pemesanan"]; ?></td>
            <td><?= $row["waktu_bayar"]; ?></td>
            <td><?= $row["total_harga"]; ?></td>
            <td>
                <a class="btn btn-outline-primary" href="editpembayaran.php?id=<?= $row["id_pembayaran"]; ?>">Edit</a>
                <a class="btn btn-outline-danger" href="hapuspembayaran.php?id=<?= $row["id_pembayaran"]; ?>" onclick="
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
