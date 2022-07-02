<?php include 'layout/index.html'; ?>
<?php
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data pengguna berdasarkan id
$pemesanan = query("SELECT * FROM pemesanan WHERE id_pemesanan = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

    //cek data berhasil ditambah/tidak 
    if( editpemesanan($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'pemesanan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'pemesanan.php';
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
    <h1>Edit data pemesanan</h1>

    <form action="" method="POST">
    <input type="hidden" name="id_pemesanan" value="<?= $pemesanan["id_pemesanan"]; ?>">
        <ul>
            <li>
                <label for="id_pengguna">ID pengguna : </label>
                <input type="int" name="id_pengguna" id="id_pengguna"
                value="<?= $pemesanan["id_pengguna"]; ?>">
            </li>
            <li>
                <label for="lokasi_pemesanan">Lokasi pemesanan : </label>
                <input type="text" name="lokasi_pemesanan" id="lokasi_pemesanan"
                value="<?= $pemesanan["lokasi_pemesanan"]; ?>">
            </li>
            <li>
                <label for="waktu_pesan">Waktu pesan : </label>
                <input type="datetime-local" name="waktu_pesan" id="waktu_pesan"
                value="<?= $pemesanan["waktu_pesan"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Edit Data</button>
            </li>
        </ul>

    </form>


</body>
</html>