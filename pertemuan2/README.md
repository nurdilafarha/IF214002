# Aplikasi Layanan Pengumpulan Barang Bekas

## Deskripsi
Aplikasi ini dibuat untuk mengumpulkan barang bekas dari rumah-rumah untuk dibawa ke tempat pengumpulan barang bekas. Fitur-fitur utama aplikasi tersebut adalah sebagai berikut:

- Mendata pesanan pengambilan barang bekas
- Melakukan pengambilan barang bekas ke rumah pelanggan
- Mentransfer sejumlah uang kepada pelanggan sesuai berat barang yang dikumpulkan

## Entitas dan Atribut
### Pelanggan
- Nama
- ID
- NIK
- Alamat
- Kontak

### Kurir
- Nama
- ID
- Kontak

### Pesanan
- ID
- ID kurir
- ID pelanggan
- Jenis Barang
- Lokasi pengambilan
- Waktu pengambilan

### Pembayaran
- ID pesanan
- Berat barang
- Nomor rekening pelanggan
