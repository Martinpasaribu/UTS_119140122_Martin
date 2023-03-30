<?php  
 $sumber = 'http://sis-bgsejarah.byethost17.com';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 //echo $data[1]["nama_lokasi"];
 echo "<h1 align='center'>Jumlah lomba anak bercerita terbaik jakarta ada ".($data)." Siswa dan Siswi</h1>";
 echo $konten,$data;
?>
