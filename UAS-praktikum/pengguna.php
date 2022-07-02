
<?php
require 'functions.php';
$pengguna = query("SELECT * FROM pengguna");
?>
<?php include 'layout/index.html'?>

<!DOCTYPE html>
<html>
<head>
    <title>Junk Collector</title>
</head>
<body>
    
<h1>Daftar Pengguna</h1>
<br>

<a class="btn btn-outline-dark" href="tambahpengguna.php">Tambah data pengguna</a>
<br><br>

<div class="table-responsive">
    <table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No.</th>
            <th scope="col">ID Pengguna</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kontak</th>
            <th scope="col">Email</th>
            <th scope="col">Pass</th>
            <th scope="col">Aksi</th>
        </tr>


        <?php $i = 1; ?>
        <?php foreach( $pengguna as $row) : ?>
        <tr>
                <td><?= $i; ?></td>
                <td><?= $row["id_pengguna"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td><?= $row["kontak"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["pass"]; ?></td>
                <td>
                    <a class="btn btn-outline-primary" href="editpengguna.php?id=<?= $row["id_pengguna"]; ?>">Edit</a>
                    <a class="btn btn-outline-danger" href="hapuspengguna.php?id=<?= $row["id_pengguna"]; ?>" onclick="
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
