<?php include 'layout/index.html'; ?>
<?php
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data pengguna berdasarkan id
$barang = query("SELECT * FROM barang_jual WHERE id_barang_jual = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

    //cek data berhasil ditambah/tidak 
    if( editbarang($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'barang.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'barang.php';
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
    <h1>Edit data barang</h1>

    <form action="" method="POST">
    <input type="hidden" name="id_barang_jual" value="<?= $barang["id_barang_jual"]; ?>">
        <ul>
            <li>
                <label for="jenis">Jenis barang : </label>
                <input type="text" name="jenis" id="jenis"
                value="<?= $barang["jenis"]; ?>">
            </li>
            <li>
                <label for="harga_perkilo">Harga perkilo : </label>
                <input type="int" name="harga_perkilo" id="harga_perkilo"
                value="<?= $barang["harga_perkilo"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>


</body>
</html>