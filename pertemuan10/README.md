## Cheatsheet 
![cheatsheet1](https://github.com/nurdilafarha/IF214002/blob/main/pertemuan10/sql_cheatsheet.png)
![cheatsheet](https://github.com/nurdilafarha/IF214002/blob/main/pertemuan10/sql_cheatssheet2.png)

## Query 

Buat query untuk mencari penduduk berusia diatas 25 tahun yang berada di kabupaten 3204 

```sql
SELECT nama_lengkap, tanggal_lahir, timestampdiff(year,tanggal_lahir,curdate()) AS umur FROM penduduk WHERE kode_kabupaten = '3204' && timestampdiff(year,tanggal_lahir,curdate()) > 25;
```
