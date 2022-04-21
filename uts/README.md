## UTS BASIS DATA
[1] Basis data relasional dapat langsung dibangun menggunakan perintah SQL di sistem basis data seperti MySQL, dsb tanpa ada perancangan terlebih dahulu. Jelaskan apa keuntungan melakukan perancangan basis data terlebih dahulu (menggunakan ERD atau Class Diagram).
- Dengan melakukan perancangan basis data menggunakan ERD dapat memudahkan kita memahami hubungan atau relasi antar entitas, membantu melihat bagaimana satu entitas dapat mempengaruhi entitas lainnya, dan dapat memodelkan proses bisnis secara akurat karena hubungan antar entitasnya terstruktur dengan baik.
---
[2] Jelaskan bagaimana cara mentransformasikan proses bisnis sebuah organisasi menjadi struktur data di basis data!
- Membuat ER Diagramnya terlebih dahulu agar relasi antar entitas dapat diketahui serta proses bisnis menjadi lebih terstruktur 
- Nama entitas pada ER diagram, diubah menjadi nama tabel di struktur tabel database
- Kemudian atribut masing-masing entitas diubah menjadi nama kolom
- Primary key merepresentasikan kunci utama pada sebuah tabel

---
[3] Rancang solusi digital dari satu permasalahan yang ada di sekitar anda.

A. Deskripsikan solusi digital tersebut dalam satu paragraf
-   Aplikasi penjualan barang bekas merupakan aplikasi yang bertujuan untuk menghubungkan antara pengguna (masyarakat) dengan kolektor barang bekas. Pengguna yang ingin menjual barang bekas hanya tinggal melakukan pemesanan di aplikasi lalu kolektor akan datang ke lokasi pengambilan untuk mengambil barang bekas tersebut. Barang tersebut dibawa kolektor untuk ditimbang kemudian diberi harga sesuai dengan berat barangnya. Setelah selesai, kolektor akan membayarkan hasil penjualannya kepada pengguna.

B. Buat list fitur-fitur yang ada pada solusi digital tersebut
- Melakukan pemesanan layanan penjualan barang bekas
- Kolektor mengambil barang bekas ke lokasi pengambilan
- Melakukan pembayaran hasil penjualan kepada pengguna

C. Buat ERD notasi Chen dari struktur data yang mewakili fitur-fitur di solusi digital tersebut

D. Buat ERD notasi Crow Foot dari struktur data logical yang mewakili fitur-fitur di solusi digital tersebut, lengkap dengan keys, tipe data, dan normalisasi bentuk ke 3
