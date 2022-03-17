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
- \* ID
- Nama
- Alamat
- Kontak
- Email

### Kolektor
- \* ID
- Nama
- Alamat
- Kontak

### Pemesanan
- \* ID 
- ID kolektor
- ID pengguna
- Lokasi
- Waktu

### Barang
- Jenis
- Jumlah

### Pembayaran
- ID pemesanan
- Total Harga
- \* Nomor Rekening

### Relationship
- Pengguna 1 1 - 0 N Pemesanan
- Pemesanan 1 1 - 1 N Barang
- Pengguna 1 1 - 0 N Barang
- Barang N 1 - 1 1 Kolektor
- Kolektor 1 1 - 1 N Pembayaran
- Pembayaran N 0 - 1 N Pengguna
