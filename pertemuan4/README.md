# Aplikasi Penjualan Barang Bekas

## Deskripsi
Aplikasi ini bertujuan untuk menghubungkan antara pengguna dengan kolektor barang bekas agar proses jual beli barang bekas menjadi lebih mudah.

## Fitur Fitur
- Melakukan pemesanan penjualan barang bekas
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

### Relationship
- Pengguna 1 1 - 0 N Pemesanan
- Pemesanan 1 1 - 1 N Barang
- Pengguna 1 1 - 0 N Barang
- Barang N 0 - 1 1 Kolektor
- Kolektor 1 1 - 0 N Pembayaran
- Pembayaran N 0 - 1 1 Pengguna
- Pembayaran 1 1 - 1 N Detail Pembayaran
