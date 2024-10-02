<?php
  // buat koneksi dengan database mysql
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "kampusku";
  $link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 
  //berhasil mengirim nilai true kalau gagal mengirim nilai false

  
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }
?>
