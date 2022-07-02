# Aplikasi Penjualan Barang Bekas

## Deskripsi
Aplikasi ini bertujuan untuk menghubungkan antara pengguna (masyarakat) dengan kolektor barang bekas agar proses jual beli barang bekas menjadi lebih mudah. Pengguna yang ingin menjual barang bekas seperti kardus, kertas, kaleng, koran, botol plastik, dan lainnya tinggal melakukan pemesanan pada aplikasi dengan melihat kolektor terdekat. Kolektor akan mengambil barang ke rumah pengguna dan melakukan pembayaran sesuai berat barang.

### DDL
  - CREATE TABLE
  ```sql
  CREATE TABLE pengguna (
    id_pengguna INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    alamat VARCHAR(80) NOT NULL,
    kontak VARCHAR(13) NOT NULL,
    email VARCHAR(30) NOT NULL, 
    pass VARCHAR(50) NOT NULL
  );

  CREATE TABLE pemesanan (
    id_pemesanan INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_pengguna INT NOT NULL,
    id_admin_yg_konfirmasi INT NOT NULL,
    lokasi_pemesanan VARCHAR(80) NOT NULL,
    waktu_pesan DATETIME NOT NULL
  );

  CREATE TABLE detail_pemesanan (
    id_det_pemesanan INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_pemesanan INT NOT NULL,
    id_barang_jual INT NOT NULL,
    jumlah_barang_jual INT NOT NULL,
    CONSTRAINT id_pemesanan FOREIGN KEY (id_pemesanan) REFERENCES pemesanan (id_pemesanan)
  );

  CREATE TABLE barang_jual (
    id_barang_jual INT NOT NULL PRIMARY KEY,
    jenis VARCHAR(25) NOT NULL,
    harga_perkilo INT NOT NULL
  );

  CREATE TABLE kolektor (
    id_kolektor INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    alamat VARCHAR(80) NOT NULL,
    kontak VARCHAR(13) NOT NULL,
    email VARCHAR(30) NOT NULL,
    pass VARCHAR(50) NOT NULL
  );

  CREATE TABLE pembayaran (
    id_pembayaran INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_det_pemesanan INT NOT NULL,
    waktu_bayar DATETIME NOT NULL,
    total_harga INT NOT NULL
  );

  CREATE TABLE detail_pembayaran (
    id_det_bayar INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_pembayaran INT NOT NULL,
    id_barang_jual INT NOT NULL,
    berat_barang INT NOT NULL,
    harga INT NOT NULL
  );
```

- ALTER TABLE

```sql
ALTER TABLE detail_pemesanan ADD COLUMN(satuan VARCHAR(2) NOT NULL);
ALTER TABLE detail_pembayaran ADD COLUMN(satuan VARCHAR(2) NOT NULL);
```

## DML
- INSERT
```
INSERT INTO pengguna (id_pengguna, nama, alamat, kontak, email, pass) VALUES (11,"Amel","Jalan ABC no. 1","08134526715","amel123@gmail.com","melamel");
INSERT INTO pengguna (id_pengguna, nama, alamat, kontak, email, pass) VALUES (12,"Diana","Jalan Salak 4","0838456712","princesdiana@gmail.com","diana123");

INSERT INTO pemesanan (id_pemesanan, id_pengguna, lokasi_pemesanan, waktu_pesan) VALUES (1,11,00123,"Jalan ABC no.1","2022-03-13 13:35:01.234");
INSERT INTO pemesanan (id_pemesanan, id_pengguna, lokasi_pemesanan, waktu_pesan) VALUES (2,12,00123,"Jalan Salak 4","2022-04-01 09:00:00.000");

INSERT INTO detail_pemesanan (id_det_pemesanan, id_pemesanan, id_barang_jual, jumlah_barang_jual, satuan) VALUES (01,1,135,1,"Kg");
INSERT INTO detail_pemesanan (id_det_pemesanan, id_pemesanan, id_barang_jual, jumlah_barang_jual, satuan) VALUES (02,1,136,5,"Kg");
INSERT INTO detail_pemesanan (id_det_pemesanan, id_pemesanan, id_barang_jual, jumlah_barang_jual, satuan) VALUES (03,2,136,2,"Kg");

INSERT INTO barang_jual (id_barang_jual, jenis, harga_perkilo) VALUES (135,"Koran",4000);
INSERT INTO barang_jual (id_barang_jual, jenis, harga_perkilo) VALUES (136,"Kardus",3000);
INSERT INTO barang_jual (id_barang_jual, jenis, harga_perkilo) VALUES (137,"Kaleng",4500);
INSERT INTO barang_jual (id_barang_jual, jenis, harga_perkilo) VALUES (138,"Besi",6000);
INSERT INTO barang_jual (id_barang_jual, jenis, harga_perkilo) VALUES (139,"Botol plastik",3000);
INSERT INTO barang_jual (id_barang_jual, jenis, harga_perkilo) VALUES (140,"Tembaga",7000);

INSERT INTO kolektor (id_kolektor, nama, alamat, kontak, email, pass) VALUES (01212,"Asep","Jalan Stroberi","0835123456","asepstroberi@gmail.com","astro123");
INSERT INTO kolektor (id_kolektor, nama, alamat, kontak, email, pass) VALUES (13456,"Dani","Jalan Mangga","08976132565","daniaja@gmail.com","danidani");

INSERT INTO pembayaran (id_pembayaran, id_det_pemesanan, waktu_bayar, total_harga) VALUES (56789,01,"2022-03-13 14:00:01.000",19000);
INSERT INTO pembayaran (id_pembayaran, id_det_pemesanan, waktu_bayar, total_harga) VALUES (76543,02,"2022-04-01 11:21:14.000",6000);

INSERT INTO detail_pembayaran (id_det_bayar, id_pembayaran, id_barang_jual, berat_barang, harga, satuan) VALUES (1,56789,135,1,4000,"Kg");
INSERT INTO detail_pembayaran (id_det_bayar, id_pembayaran, id_barang_jual, berat_barang, harga, satuan) VALUES (2,56789,136,5,15000,"Kg");
INSERT INTO detail_pembayaran (id_det_bayar, id_pembayaran, id_barang_jual, berat_barang, harga, satuan) VALUES (3,76543,136,2,6000,"kg");
```
- UPDATE
```sql
UPDATE kolektor SET pass = "aseppp" WHERE id_kolektor = 01212
UPDATE kolektor SET id_kolektor = 01313 WHERE kolektor.nama = "Dani"
```
## DQL

- Melihat data pembayaran tertinggi dalam seminggu
```sql
SELECT waktu_bayar, total_harga 
        FROM pembayaran 
        WHERE waktu_bayar >= '2022-06-01' AND waktu_bayar < '2022-06-12'
```
- Menampilkan data id pemesanan, id pengguna, serta waktu pemesanan selama seminggu
```sql
SELECT pemesanan.id_pemesanan, pengguna.id_pengguna, pemesanan.waktu_pesan
FROM pemesanan 
INNER JOIN pengguna ON pemesanan.id_pengguna = pengguna.id_pengguna
WHERE waktu_pesan >= '2022-06-01' AND waktu_pesan < '2022-06-12';
```
- Melihat perkembangan pemesanan dalam sebulan
```sql
SELECT COUNT(waktu_pesan) AS jml_pemesanan,
	(
        SUM(
            CASE WHEN waktu_pesan >= '2022-06-01' AND waktu_pesan < '2022-06-12' THEN 1 ELSE 0 END
            )
        ) AS minggu_1,
        (
        SUM(
            CASE WHEN waktu_pesan >= '2022-06-12' AND waktu_pesan < '2022-06-19' THEN 1 ELSE 0 END
            )
        ) AS minggu_2,
        (
        SUM(
            CASE WHEN waktu_pesan >= '2022-06-19' AND waktu_pesan < '2022-06-26' THEN 1 ELSE 0 END
            )
        ) AS minggu_3,
        (
        SUM(
            CASE WHEN waktu_pesan >= '2022-06-26' AND waktu_pesan < '2022-07-01' THEN 1 ELSE 0 END
            )
        ) AS minggu_4
FROM pemesanan;
```
