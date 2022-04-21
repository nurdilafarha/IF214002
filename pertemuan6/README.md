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


### Tabel Pengguna
|🔑id_pengguna|nama|alamat|kontak|email|pass|
|---|---|---|---|---|---|
|11|Amel|Jalan ABC no 1|08134526715|amel123@gmail.com|melamel|
|12|Diana|Jalan Salak 4|0838456712|princesdiana@gmail.com|diana123|

### Tabel Pemesanan
|🔑id_pemesanan|id_pengguna|id_admin_yg_konfirmasi|lokasi_pemesanan|waktu_pesan|
|---|---|---|---|---|
|1|11|00123|Jalan ABC no 1|2022-03-13 13:35:01|
|1|11|00123|Jalan ABC no 1|2022-03-13 13:35:01|
|2|12|00123|Jalan Salak 4|2022-04-01 09:00:00|

### Tabel Detail Pemesanan
|🔑id_detail_pemesanan|id_pemesanan|id_barang_jual|jumlah_barang_jual|
|---|---|---|---|
|01|1|135|50|
|01|1|136|10|
|02|2|136|20|

### Tabel Barang 
|🔑id_barang_jual|jenis|harga_perkilo|
|---|---|---|
|135|Koran|4000|
|136|Kardus|3000|
|137|Kaleng|4500|

### Tabel Admin
|🔑id_admin|nama|kontak|email|pass|
|---|---|---|---|---|
|00123|Riri|083756431277|ariana@gmail.com|rianari|

### Tabel Kolektor
|🔑id_kolektor|nama|alamat|kontak|email|pass|
|---|---|---|---|---|---|
|01212|Asep|Jalan stroberi|0835123456|asepstroberi@gmail.com|astro123|
|13456|Dani|Jalan mangga|08976132565|daniaja@gmail.com|danidani|

### Tabel Pembayaran
|🔑id_pembayaran|id_det_pemesanan|waktu_bayar|total_harga|
|---|---|---|---|
|56789|01|2022-03-13 14:00:01|18000|
|76543|02|2022-04-01 11:21:14|12000|

### Tabel Detail Pembayaran
|🔑id_pembayaran|id_barang_jual|berat_barang|harga|
|---|---|---|---|
|56789|135|3|12000|
|56789|136|2|6000|
|76543|136|4|12000|
