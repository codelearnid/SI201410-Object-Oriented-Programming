<?php
  //buat koneksi dengan MySQL
  $koneksi = mysql_connect('localhost','root','');

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
    die ("Koneksi dengan database gagal: ".mysql_connect_errno().
         " - ".mysql_connect_error());
  }

  //pilih dan gunakan database universitas
  $hasil_query = mysql_query('USE universitas',$koneksi);

  //jalankan query
  $query = "SELECT * FROM mahasiswa";
  $hasil_query = mysql_query($query);

  //tampilkan data
  while ($row = mysql_fetch_array($hasil_query, MYSQL_NUM)) {
     echo "$row[0] $row[1] $row[2] $row[3] $row[4]";
     echo "<br />";
   }

  //periksa query, tampilkan pesan kesalahan jika gagal
  if(!$hasil_query){
    die ("Query gagal dijalankan: ".mysql_errno($koneksi).
         " - ".mysql_error($koneksi));
  }
  
  // bebaskan memory
  mysql_free_result($hasil_query);

  // tutup koneksi dengan database mysql
  mysql_close($koneksi);
?>
