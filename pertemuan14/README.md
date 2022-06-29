## Tugas
1. Sebagai pemimpin organisasi / perusahaan, dari data hasil aplikasi yang sudah dibuat, tentukan masalah-masalah prioritas untuk dicari solusinya!
2. Tentukan struktur data dan bentuk visualisasinya ! Ada contoh visualisasinya (screenshot)
3. Buat query SQL untuk mendapatkan data no. 2 tersebut !

---
- Ingin tahu jenis barang bekas yang paling banyak dijual perbulan
  - Visualisasi : bar chart
  - Data : bulan, tahun, jenis barang, jumlah barang(Kg)
  
  ![bulanan](https://github.com/nurdilafarha/IF214002/blob/main/pertemuan14/barangterjualbulanan.png)
  
- Ingin tahu perkembangan penjualan perminggu
  - Visualisasi : line chart
  - Data : minggu ke, bulan, tahun, jumlah barang(kg)
  
  ![perminggu](https://github.com/nurdilafarha/IF214002/blob/main/pertemuan14/perkmbgnperminggu.png)
 
---
- melihat perkembangan pemesanan dalam 1 bulan
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
