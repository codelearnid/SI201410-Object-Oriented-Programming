<?php
  // buat koneksi dengan database mysql
  $dbhost  = "localhost";
  $dbuser  = "root";
  $dbpass  = "";
  $dbname  = "belumada";
  $koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
      die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
           " - ".mysqli_connect_error());
  }
