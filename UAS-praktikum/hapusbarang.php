<?php
require 'functions.php';

$id = $_GET["id"];

if( hapusbarang($id) > 0 ) {
    echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'barang.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'barang.php';
            </script>
        ";
}

?>