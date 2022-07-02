<?php include 'layout/index.html'; ?>
<?php
require 'functions.php';

//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

    //cek data berhasil ditambah/tidak 
    if( tambahbarang($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'barang.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
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
    <h1>Tambah data barang</h1>

    <form action="" method="POST">
            <div class="form-group">
                <label for="jenis">Jenis barang : </label>
                <input type="text" name="jenis" id="jenis"
                required>
            </div>
            <div class="form-group">
                <label for="harga_perkilo">Harga perkilo : </label>
                <input type="int" name="harga_perkilo" id="harga_perkilo"
                required>
            </div>
                <button type="submit" name="submit">Tambah Data</button>
    </form>


</body>
</html>