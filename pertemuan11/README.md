## Tugas
Buat DDL, sampel DML, dan DQL untuk proyek besar teman-teman

---
## DDL
- CREATE TABLE
```sql
CREATE TABLE pengguna (
  id_pengguna INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(50),
  alamat VARCHAR(80),
  kontak VARCHAR(13),
  email VARCHAR(30) NOT NULL, 
  pass VARCHAR(50) NOT NULL
);

CREATE TABLE pemesanan (
  id_pemesanan INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_pengguna INT(5),
  id_admin_yg_konfirmasi INT(5),
  lokasi_pemesanan VARCHAR(80),
  waktu_pesan DATETIME
);

CREATE TABLE detail_pemesanan (
  id_det_pemesanan INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_pemesanan INT(10),
  id_barang_jual INT(3),
  jumlah_barang_jual INT
);

CREATE TABLE barang_jual (
  id_barang_jual INT(3) NOT NULL PRIMARY KEY,
  jenis VARCHAR(25),
  harga_perkilo INT
);

CREATE TABLE kolektor (
  id_kolektor INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(50),
  alamat VARCHAR(80),
  kontak VARCHAR(13),
  email VARCHAR(30) NOT NULL,
  pass VARCHAR(50) NOT NULL
);

CREATE TABLE admin (
  id_admin INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(50),
  kontak VARCHAR(13),
  email VARCHAR(30) NOT NULL,
  pass VARCHAR(50) NOT NULL
);

CREATE TABLE pembayaran (
  id_pembayaran INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_det_pemesanan INT(5),
  waktu_bayar DATETIME,
  total_harga INT
);

CREATE TABLE detail_pembayaran (
  id_pembayaran INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_barang_jual INT(3),
  berat_barang INT,
  harga INT
);

```

## DML
- INSERT 
```sql
INSERT INTO pengguna (id_pengguna, nama, alamat, kontak, email, pass) VALUES (11,"Amel","Jalan ABC no. 1","08134526715","amel123@gmail.com","melamel");
INSERT INTO pengguna (id_pengguna, nama, alamat, kontak, email, pass) VALUES (12,"Diana","Jalan Salak 4","0838456712","princesdiana@gmail.com","diana123");

INSERT INTO pemesanan (id_pemesanan, id_pengguna, id_admin_yg_konfirmasi, lokasi_pemesanan, waktu_pesan) VALUES (1,11,00123,"Jalan ABC no.1","2022-03-13 13:35:01.234");
INSERT INTO pemesanan (id_pemesanan, id_pengguna, id_admin_yg_konfirmasi, lokasi_pemesanan, waktu_pesan) VALUES (2,12,00123,"Jalan Salak 4","2022-04-01 09:00:00.000");

INSERT INTO detail_pemesanan (id_det_pemesanan, id_pemesanan, id_barang_jual, jumlah_barang_jual) VALUES (01,1,135,50);
INSERT INTO detail_pemesanan (id_det_pemesanan, id_pemesanan, id_barang_jual, jumlah_barang_jual) VALUES (02,2,136,20);

INSERT INTO barang_jual (id_barang_jual, jenis, harga_perkilo) VALUES (135,"Koran",4000);
INSERT INTO barang_jual (id_barang_jual, jenis, harga_perkilo) VALUES (136,"Kardus",3000);
INSERT INTO barang_jual (id_barang_jual, jenis, harga_perkilo) VALUES (137,"Kaleng",4500);

INSERT INTO admin (id_admin, nama, kontak, email, pass) VALUES (00123,"Riri","083756431277","ariana@gmail.com","rianari");

INSERT INTO kolektor (id_kolektor, nama, alamat, kontak, email, pass) VALUES (01212,"Asep","Jalan Stroberi","0835123456","asepstroberi@gmail.com","astro123");
INSERT INTO kolektor (id_kolektor, nama, alamat, kontak, email, pass) VALUES (13456,"Dani","Jalan Mangga","08976132565","daniaja@gmail.com","danidani");

INSERT INTO pembayaran (id_pembayaran, id_det_pemesanan, waktu_bayar, total_harga) VALUES (56789,01,"2022-03-13 14:00:01.000",12000);
INSERT INTO pembayaran (id_pembayaran, id_det_pemesanan, waktu_bayar, total_harga) VALUES (76543,02,"2022-04-01 11:21:14.000",12000);

INSERT INTO detail_pembayaran (id_pembayaran, id_barang_jual, berat_barang, harga) VALUES (56789,135,3,12000);
INSERT INTO detail_pembayaran (id_pembayaran, id_barang_jual, berat_barang, harga) VALUES (76543,136,4,12000);
```

## DQL
