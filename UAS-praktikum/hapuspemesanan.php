<?php
require 'functions.php';

$id = $_GET["id"];

if( hapuspesan($id) > 0 ) {
    echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'pemesanan.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data gagal dihapus!');
                document.location.href = 'pemesanan.php';
            </script>
        ";
}

?>