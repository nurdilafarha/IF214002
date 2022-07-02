<?php include 'layout/index.html'; ?>
<?php
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

    //cek data berhasil ditambah/tidak 
    if( tambahbayar($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'pembayaran.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'pembayaran.php';
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
    <h1>Data pembayaran</h1>

    <form action="" method="POST">
            <div class="form-group">
                <label for="id_det_pemesanan">ID detail pemesanan : </label>
                <input type="int" name="id_det_pemesanan" id="id_det_pemesanan"
                required>
            </div>
            <div class="form-group">
                <label for="waktu_bayar">Waktu Bayar : </label>
                <input type="datetime-local" name="waktu_bayar" id="waktu_bayar"
                required>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga : </label>
                <input type="int" name="total_harga" id="total_harga"
                required>
            </div>
                <button type="submit" name="submit">Tambah Data</button>
    </form>


</body>
</html>