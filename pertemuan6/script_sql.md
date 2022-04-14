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
create table pemesanan (
  id_pemesanan INT(10),
  id_pengguna INT(5),
  id_kolektor INT(5),
  lokasi_pemesanan VARCHAR(80),
  waktu_pesan DATETIME,
  primary key(id_pemesanan)
 );
 create table detail_pemesanan (
  id_det_pemesanan INT(5),
  id_pemesanan INT(10),
  id_barang_jual INT(3),
  jumlah_barang_jual INT,
  primary key (id_det_pemesanan)
 );
 create table barang_jual (
  id_barang_jual INT(3),
  jenis VARCHAR(25),
  harga_perkilo int,
  primary key (id_barang_jual)
 );
 create table kolektor (
  id_kolektor int(5),
  nama varchar(50),
  alamat varchar(80),
  kontak varchar(13),
  email varchar(20) not NULL,
  pass varchar(50) not NULL,
  primary key (id_kolektor)
 );
 create table pembayaran (
  id_pembayaran int(10),
  id_det_pemesanan INT(5),
  waktu_bayar DATETIMe,
  total_harga int,
  primary key (id_pembayaran)
 );
 create table detail_pembayaran (
  id_pembayaran int(10),
  id_barang_jual int(3),
  berat_barang int,
  harga int,
  primary key (id_pembayaran)
 );
```
