### Contoh pemanfaatan data historis:
- Data kunjungan perpustakaan
- Data pasien rumah sakit
- Data pengunjung tempat wisata

### ERD penyimpanan data karyawan
![erd karyawan](https://github.com/nurdilafarha/IF214002/blob/main/pertemuan7/erd_karyawan.png)

```sql
CREATE TABLE karyawan(
  id_karyawan VARCHAR(80),
  nama_karyawan VARCHAR(80),
  alamat VARCHAR(300),
  jenis_kelamin VARCHAR(9),
  no_telp VARCHAR(13),
  PRIMARY KEY(id_karyawan)
 );
 
 CREATE TABLE gaji(
   tgl_mulai_gaji DATE,
   id_karyawan VARCHAR(8),
   gaji_bulanan INT,
   PRIMARY KEY (tgl_mulai_gaji, id_karyawan)
  );
  
  CREATE TABLE tempat_tinggal(
  kode_pos INT,
  kota VARCHAR(50),
  kecamatan VARCHAR(50),
  PRIMARY KEY (kode_pos)
 );
  
CREATE TABLE jabatan(
  tgl_mulai_jabat DATE,
  id_karyawan VARCHAR(8),
  jabatan VARCHAR(80),
  PRIMARY KEY(tgl_mulai_jabat, id_karyawan)
 );
```

