<?php include 'layout/index.html'; ?>
<?php
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data pengguna berdasarkan id
$pembayaran = query("SELECT * FROM pembayaran WHERE id_pembayaran = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

    //cek data berhasil ditambah/tidak 
    if( editpembayaran($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'pembayaran.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
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
    <h1>Edit data pembayaran</h1>

    <form action="" method="POST">
    <input type="hidden" name="id_pembayaran" value="<?= $pembayaran["id_pembayaran"]; ?>">
        <ul>
            <li>
                <label for="id_det_pemesanan">ID detail pemesanan : </label>
                <input type="int" name="id_det_pemesanan" id="id_det_pemesanan"
                value="<?= $pembayaran["id_det_pemesanan"]; ?>">
            </li>
            <li>
                <label for="waktu_bayar">Waktu Bayar : </label>
                <input type="datetime-local" name="waktu_bayar" id="waktu_bayar"
                value="<?= $pembayaran["waktu_bayar"]; ?>">
            </li>
            <li>
                <label for="total_harga">Total Harga : </label>
                <input type="int" name="total_harga" id="total_harga"
                value="<?= $pembayaran["total_harga"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Edit Data</button>
            </li>
        </ul>

    </form>


</body>
</html>