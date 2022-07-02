<?php include 'layout/index.html'; ?>
<?php
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

    //cek data berhasil ditambah/tidak 
    if( tambahpesan($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'pemesanan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
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
    <h1>Data pemesanan</h1>

    <form action="" method="POST">
            <div class="form-group">
                <label for="id_pengguna">ID pengguna : </label>
                <input type="int" name="id_pengguna" id="id_pengguna"
                required>
            </div>
            <div class="form-group">
                <label for="lokasi_pemesanan">Lokasi pemesanan : </label>
                <input type="text" name="lokasi_pemesanan" id="lokasi_pemesanan"
                required>
            </div>
            <div class="form-group">
                <label for="waktu_pesan">Waktu pesan : </label>
                <input type="datetime-local" name="waktu_pesan" id="waktu_pesan"
                required>
            </div>
                <button type="submit" name="submit">Tambah Data</button>
    </form>


</body>
</html>