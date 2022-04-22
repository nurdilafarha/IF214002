## UTS Praktikum Basis Data
### 1. Jelaskan contoh-contoh perintah SQL beserta kegunannya !
#### Jawaban :
- DDL (Data Definition Language) digunakan untuk membuat, memodifikasi, dan menghapus struktur sebuah database. Perintah-perintah dalam DDL yaitu :
  - Create - untuk membuat database baru
  - Alter - mengubah struktur tabel database
  - Rename - mengubah nama objek yang ada di database
  - Drop - menghapus objek dari database
  - Truncate - menghapus semua record dari tabel
  - Comment - menambahkan komentar ke kamus data
- DQL (Data Query Language) digunakan untuk menampilkan olahan data. Perintah dalam DQL yaitu :
  - Select - mengambil data dari database
- DML (Data Manipulation Language) digunakan untuk memanipulasi data yang ada dalam database. Perintah-perintah dalam DML yaitu :
  - Insert - memasukkan data ke sebuah tabel
  - Update - memperbarui data dalam tabel
  - Delete - menghapus record dari tabel database
  - Lock - mengunci tabel
  - Call - memanggil subprogram PL/SQL atau Java
  - Explain plan - menjelaskan jalur akses ke data
- DCL (Data Control Language) digunakan untuk mengontrol data dan server database. Perintah-perintah dalam DCL yaitu :
  - Grant - memberikan hak akses pengguna ke database
  - Revoke - menghilangkan hak akses yang diberikan dengan perintah Grant
- TCL (Transaction Control Language) digunakan untuk menangani transaksi dalam database. Perintah-perintah TCL yaitu :
  - Commit - melakukan transaksi
  - Rollback - mengembalikan transaksi jika terjadi kesalahan
  - Savepoint - menetapkan savepoint dalam transaksi
  - Set Transaction - menentukan karakteristik untuk transaksi

### 2. Rancang solusi digital dari satu permasalahan yang ada di sekitar Anda. Berdasarkan ERD yang telah dibuat, buatlah implementasi basis data dari ERD tersebut dalam bentuk tabel basis data lengkap dengan Primary Key, Foreign Key dengan menggunakan perintah CREATE TABLE bahasa SQL.
#### Jawaban :
```sql
CREATE TABLE pengguna (
  id_pengguna INT(5),
  nama VARCHAR(50),
  alamat VARCHAR(80),
  kontak VARCHAR(13),
  email VARCHAR(20) NOT NULL,
  pass VARCHAR(50) NOT NULL,
  PRIMARY KEY(id_pengguna)
);
-- foreign key: id_pengguna, id_admin_yg_konfirmasi 
create table pemesanan (
  id_pemesanan INT(10),
  id_pengguna INT(5),
  id_admin_yg_konfirmasi INT(5),
  lokasi_pemesanan VARCHAR(80),
  waktu_pesan DATETIME,
  primary key(id_pemesanan)
);
-- foreign key: id_pemesananan, id_barang_jual
CREATE TABLE Detail_pemesanan (
  id_det_pemesanan INT(5),
  id_pemesanan INT(10),
  id_barang_jual INT(3),
  jumlah_barang_jual INT,
  PRIMARY KEY(id_det_pemesanan)
);
CREATE TABLE admin (
  id_admin INT(5),
  nama VARCHAR(13),
  kontak VARCHAR(13) NOT NULL,
  email VARCHAR(20) NOT NULL,
  pass VARCHAR(50) NOT NULL,
  PRIMARY KEY(id_admin)
);
CREATE TABLE kolektor (
  id_kolektor INT(5),
  nama VARCHAR(50),
  alamat VARCHAR(80),
  kontak VARCHAR(13),
  email VARCHAR(20) NOT NULL,
  pass VARCHAR(50) NOT NULL,
  PRIMARY KEY(id_kolektor)
);
CREATE TABLE Barang_jual (
  id_barang_jual INT(3),
  jenis VARCHAR(25),
  harga_perkilo INT,
  PRIMARY KEY(id_barang_jual)
);
-- foreign key: id_det_pemesanan
CREATE TABLE pembayaran (
  id_pembayaran INT(10),
  id_det_pemesanan INT(5),
  waktu_bayar DATETIME,
  total_harga INT,
  PRIMARY KEY(id_pembayaran)
);
-- foreign key: id_barang_jual
CREATE TABLE Detail_pembayaran (
  id_pembayaran INT(10),
  id_barang_jual VARCHAR(25),
  berat_barang INT,
  harga INT,
  PRIMARY KEY(id_pembayaran)
);
