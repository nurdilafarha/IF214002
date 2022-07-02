<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "jualbarangbekas");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahpengguna($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kontak = htmlspecialchars($data["kontak"]);
    $email = htmlspecialchars($data["email"]);
    $pass = htmlspecialchars($data["pass"]);

    $query = "INSERT INTO pengguna
              VALUES ('', '$nama', '$alamat', '$kontak', '$email', '$pass')
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahkolektor($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kontak = htmlspecialchars($data["kontak"]);
    $email = htmlspecialchars($data["email"]);
    $pass = htmlspecialchars($data["pass"]);

    $query = "INSERT INTO kolektor
              VALUES ('', '$nama', '$alamat', '$kontak', '$email', '$pass')
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahbarang($data) {
    global $conn;
    $jenis = htmlspecialchars($data["jenis"]);
    $harga = htmlspecialchars($data["harga_perkilo"]);

    $query = "INSERT INTO barang_jual
              VALUES ('', '$jenis', '$harga')
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahpesan($data) {
    global $conn;
    $idpeng = htmlspecialchars($data["id_pengguna"]);
    $lokasi = htmlspecialchars($data["lokasi_pemesanan"]);
    $waktu = htmlspecialchars($data["waktu_pesan"]);

    $query = "INSERT INTO pemesanan
              VALUES ('', '$idpeng', '$lokasi', '$waktu')
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahbayar($data) {
    global $conn;
    $iddetpem = htmlspecialchars($data["id_det_pemesanan"]);
    $waktu = htmlspecialchars($data["waktu_bayar"]);
    $total = htmlspecialchars($data["total_harga"]);

    $query = "INSERT INTO pembayaran
              VALUES ('', '$iddetpem', '$waktu', '$total')
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapuspengguna($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pengguna WHERE id_pengguna = $id");
    return mysqli_affected_rows($conn);
}

function hapuskolektor($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM kolektor WHERE id_kolektor = $id");
    return mysqli_affected_rows($conn);
}

function hapusbarang($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM barang_jual WHERE id_barang_jual = $id");
    return mysqli_affected_rows($conn);
}

function hapuspesan($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pemesanan WHERE id_pemesanan = $id");
    return mysqli_affected_rows($conn);
}

function hapusbayar($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pembayaran WHERE id_pembayaran = $id");
    return mysqli_affected_rows($conn);
}


function editpengguna($data) {
    global $conn;

    $id = $data["id_pengguna"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kontak = htmlspecialchars($data["kontak"]);
    $email = htmlspecialchars($data["email"]);
    $pass = htmlspecialchars($data["pass"]);

    $query = "UPDATE pengguna SET
                nama = '$nama',
                alamat = '$alamat',
                kontak = '$kontak',
                email = '$email',
                pass = '$pass'
            WHERE id_pengguna = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editkolektor($data) {
    global $conn;

    $id = $data["id_kolektor"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kontak = htmlspecialchars($data["kontak"]);
    $email = htmlspecialchars($data["email"]);
    $pass = htmlspecialchars($data["pass"]);

    $query = "UPDATE kolektor SET
                nama = '$nama',
                alamat = '$alamat',
                kontak = '$kontak',
                email = '$email',
                pass = '$pass'
            WHERE id_kolektor = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editpemesanan($data) {
    global $conn;

    $id = $data["id_pemesanan"];
    $idpeng = htmlspecialchars($data["id_pengguna"]);
    $lokasi = htmlspecialchars($data["lokasi_pemesanan"]);
    $waktu = htmlspecialchars($data["waktu_pesan"]);

    $query = "UPDATE pemesanan SET
                id_pengguna = '$idpeng',
                lokasi_pemesanan = '$lokasi',
                waktu_pesan = '$waktu'
              WHERE id_pemesanan = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editbarang($data) {
    global $conn;

    $id = $data["id_barang_jual"];
    $jenis = htmlspecialchars($data["jenis"]);
    $harga = htmlspecialchars($data["harga_perkilo"]);

    $query = "UPDATE barang_jual SET
                jenis = '$jenis',
                harga_perkilo = '$harga'
              WHERE id_barang_jual = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editpembayaran($data) {
    global $conn;

    $id = $data["id_pembayaran"];
    $iddetpem = htmlspecialchars($data["id_det_pemesanan"]);
    $waktu = htmlspecialchars($data["waktu_bayar"]);
    $total = htmlspecialchars($data["total_harga"]);

    $query = "UPDATE pembayaran SET
                id_det_pemesanan = '$iddetpem',
                waktu_bayar = '$waktu',
                total_harga = '$total'
              WHERE id_pembayaran = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>