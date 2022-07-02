<?php
require 'functions.php';
$kolektor = query("SELECT * FROM kolektor");
?>
<?php include 'layout/index.html'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Junk Collector</title>
</head>
<body>
    
<h1>Daftar Kolektor Barang Bekas</h1>
<br>

<a class="btn btn-outline-dark" href="tambahkolektor.php">Tambah data kolektor</a>
<br><br>

<div class="table-responsive">
    <table class="table table-bordered">
    <thead class="thead-dark">

        <tr>
            <th scope="col">No.</th>
            <th scope="col">ID kolektor</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kontak</th>
            <th scope="col">Email</th>
            <th scope="col">Pass</th>
            <th scope="col">Aksi</th>
        </tr>


        <?php $i = 1; ?>
        <?php foreach( $kolektor as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["id_kolektor"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["alamat"]; ?></td>
            <td><?= $row["kontak"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["pass"]; ?></td>
            <td>
                <a class="btn btn-outline-primary" href="editkolektor.php?id=<?= $row["id_kolektor"]; ?>">Edit</a>
                <a class="btn btn-outline-danger" href="hapuskolektor.php?id=<?= $row["id_kolektor"]; ?>" onclick="
                return confirm('Apakah anda yakin ingin menghapus data ini?');">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>
