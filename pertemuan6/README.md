# Pertemuan 6 : Normalisasi

## Sebelum Normalisasi

#### Tabel Pengguna
|🔑id_pengguna|nama|alamat|kontak|email|password|no_rek|
|---|---|---|---|---|---|---|
|1|Amel|Jalan ABC|08134526715|amel123@gmail.com|melamel|234561627|
|2|Diana|Jalan Salak|0838456712|princesdiana@gmail.com|diana123|234767845|

### Tabel Pemesanan
|🔑id_pemesanan|id_pengguna|id_barang|lokasi_pemesanan|tanggal|waktu|
|---|---|---|---|---|---|
|1|1|135|Jalan ABC|13/03/2022|13.35|
|2|2|136|Jalan Salak|22/03/2022|09.00|

### Tabel Barang
|🔑id_barang|jenis|jumlah|berat|
|---|---|---|---|
|135|Koran|40|2|
|136|Kardus|10|3|

### Tabel Kolektor
|🔑id_kolektor|nama|alamat|kontak|email|password|
|---|---|---|---|---|---|
|1|Asep|Jalan stroberi|0835123456|asepstroberi@gmail.com|astro123|
|1|Dani|Jalan mangga|08976132565|daniaja@gmail.com|danidani|

### Tabel Pembayaran
|🔑id_pembayaran|id_pemesanan|id_detail_pembayaran|total_harga|rekening_pengguna|
|---|---|---|---|---|
|1234|1|4321|10000|234561627|
|1322|2|5243|15000|234767845|

### Tabel Detail Pembayaran
|🔑id_detail_pembayaran|id_pembayaran|jenis_barang|berat_barang|harga|
|---|---|---|---|---|
|4321|1234|Kaleng|2|10000|
|5243|1322|Kardus|3|15000|

---
Normalisasi Bentuk ke 1 :

Aturan : Harus memiliki Primary Key, Tidak boleh ada sel yang bernilai lebih dari satu

Karena semua tabel sudah memiliki primary key dan semua sel tidak bernilai lebh dari satu maka tabel sudah tersertifikasi normalisasi bentuk ke 1

---
Normalisasi Bentuk ke 2 :

Aturan : Harus tersertifikasi normalisasi bentuk 1, Tidak boleh ada kolom non-key yang bergantung pada sebagian dari composite key

karena semua tabel sudah tersertifikasi normalisasi bentuk 1 dan tidak ada kolom non-key yang bergantung pada sebagian dari composite key, maka tabel sudah tersertifikasi normalisasi bentuk ke 2

---
Normalisasi Bentuk ke 3 :

Aturan : Harus tersertifikasi normalisasi bentuk 2, Kolom non-key hanya boleh bergantung kepada primary key, tidak boleh ada ketergantungan tambahan ke kolom non-key lainnya


