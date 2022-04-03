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
- No Rekening

### Kolektor
- \* ID
- Nama
- Alamat
- Kontak

### Pemesanan
- \* ID
- ID kolektor
- ID pengguna
- ID barang
- Lokasi
- Waktu
- Tanggal

### Barang
- \* ID
- Jumlah
- Jenis
- Berat

### Pembayaran
- \* ID
- ID detail pembayaran
- ID pemesanan
- Total harga
- Rekening pengguna

### Detail Pembayaran
- \* ID
- ID pembayaran
- Jenis barang
- Berat barang
- Harga
