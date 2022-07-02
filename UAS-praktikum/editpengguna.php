<?php include 'layout/index.html'; ?>
<?php
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data pengguna berdasarkan id
$pengguna = query("SELECT * FROM pengguna WHERE id_pengguna = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

    //cek data berhasil diedit/tidak 
    if( editpengguna($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'pengguna.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'pengguna.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Junk Collector</title>
</head>
<body>
    <h1>Edit data pengguna</h1>

    <form action="" method="POST">
        <input type="hidden" name="id_pengguna" value="<?= $pengguna["id_pengguna"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"
                value="<?= $pengguna["nama"]; ?>">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat"
                value="<?= $pengguna["alamat"]; ?>">
            </li>
            <li>
                <label for="kontak">Kontak : </label>
                <input type="text" name="kontak" id="kontak"
                value="<?= $pengguna["kontak"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email"
                value="<?= $pengguna["email"]; ?>">
            </li>
            <li>
                <label for="pass">Password : </label>
                <input type="text" name="pass" id="pass"
                value="<?= $pengguna["pass"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Edit Data</button>
            </li>
        </ul>

    </form>


</body>
</html>