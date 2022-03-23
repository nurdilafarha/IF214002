# Aplikasi Penjualan Barang Bekas

## Deskripsi
Aplikasi ini bertujuan untuk menghubungkan antara pengguna dengan kolektor barang bekas agar proses jual beli barang bekas menjadi lebih mudah.

## Fitur Fitur
- Melakukan pemesanan penjualan barang bekas
- Melakukan pencarian kolektor terdekat
- Mengambil barang bekas ke rumah pengguna
- Melakukan pembayaran hasil penjualan

## Entitas dan Atribut
### Pengguna
- \* Id_pengguna
- Nama_penggguna
- Alamat_pengguna
- Kontak_pengguna
- Email_pengguna

### Kolektor
- \* Id_kolektor
- Nama_kolektor
- Alamat_kolektor
- Kontak_kolektor

### Pemesanan
- \* Id_pemesanan
- Id_kolektor
- Id_pengguna
- Id_barang
- Lokasi_pemesanan
- Waktu_pemesanan
- Tanggal_pemesanan

### Barang
- \* Id_barang
- Jumlah_barang
- Kode_barang
- Berat_barang

### Pembayaran
- \* Id_pembayaran
- \* No_rek
- Id_pemesanan
- Berat_barang  
- Total_harga

### Relationship
- Pengguna 1 1 - 0 N Pemesanan
- Pemesanan 1 1 - 1 N Barang
- Pengguna 1 1 - 0 N Barang
- Barang N 0 - 1 1 Kolektor
- Kolektor 1 1 - 0 N Pembayaran
- Pembayaran N 0 - 1 1 Pengguna