## Query 

SELECT nama_lengkap, tanggal_lahir, timestampdiff(year,tanggal_lahir,curdate()) AS umur FROM penduduk WHERE kode_kabupaten = '3204' && timestampdiff(year,tanggal_lahir,curdate()) > 25;
