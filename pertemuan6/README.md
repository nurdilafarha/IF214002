# Pertemuan 6 : Normalisasi
- Normalisasi bentuk ke 1
    - Harus memiliki primary key
    - Tidak boleh ada sel yang bernilai lebih dari satu
- Normalisasi bentuk ke 2
    - Harus tersertifikasi normalisasi bentuk 1
    - Tidak boleh ada kolom non-key yang bergantung pada sebagian dari composite key
- Normalisasi bentuk ke 3
    - Harus tersertifikasi normalisasi bentuk 2
    - Kolom non-key hanya boleh bergantung kepada primary key, tidak boleh ada ketergantungan tambahan ke kolom non-key lainnya

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
|1|1|136|Jalan ABC|13/03/2022|13.35|
|2|2|136|Jalan Salak|22/03/2022|09.00|

### Tabel Detail Pemesanan
|🔑id_detail_pemesanan|id_pemesanan|id_barang|jumlah|
|---|---|---|---|
|01|1|135|50|
|01|1|136|10|
|02|2|136|20|

### Tabel Barang
|🔑id_barang|jenis|harga_perkilo|
|---|---|---|
|135|Koran|4000|
|136|Kardus|3000|
|137|Kaleng|4500|

### Tabel Kolektor
|🔑id_kolektor|nama|alamat|kontak|email|password|
|---|---|---|---|---|---|
|1|Asep|Jalan stroberi|0835123456|asepstroberi@gmail.com|astro123|
|1|Dani|Jalan mangga|08976132565|daniaja@gmail.com|danidani|

### Tabel Pembayaran
|🔑id_pembayaran|id_pemesanan|id_detail_pembayaran|total_harga|rekening_pengguna|
|---|---|---|---|---|
|1234|1|4321|18000|234561627|
|1322|2|5243|12000|234767845|

### Tabel Detail Pembayaran
|🔑id_detail_pembayaran|id_pembayaran|id_barang|berat_barang|harga|
|---|---|---|---|---|
|4321|1234|135|3|12000|
|4321|1234|136|2|6000|
|5243|1322|136|4|12000|

---
Normalisasi Bentuk ke 1 :

Karena semua tabel sudah memiliki primary key dan semua sel tidak bernilai lebh dari satu maka tabel sudah tersertifikasi normalisasi bentuk ke 1

---
Normalisasi Bentuk ke 2 :


---
Normalisasi Bentuk ke 3 :


