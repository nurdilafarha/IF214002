<?php include 'layout/index.html'; ?>
<?php
require 'functions.php';


//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

    //cek data berhasil ditambah/tidak 
    if( tambahpengguna($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'pengguna.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!');
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
    <h1>Tambah data pengguna</h1>
    <br>

    <form action="" method="POST">
            <div class="form-group">
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"
                required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat"
                required>
            </div>
            <div class="form-group">
                <label for="kontak">Kontak : </label>
                <input type="text" name="kontak" id="kontak"
                required>
            </div>
            <div class="form-group">
                <label for="email">Email : </label>
                <input type="text" name="email" id="email"
                required>
            </div>
            <div class="form-group">
                <label for="pass">Password : </label>
                <input type="text" name="pass" id="pass"
                required>
            </div>
            <button type="submit" name="submit">Tambah Data</button>
    </form>


</body>
</html>