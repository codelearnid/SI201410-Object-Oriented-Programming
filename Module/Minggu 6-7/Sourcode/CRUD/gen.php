<?php
  // buat koneksi dengan database mysql
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $link   = mysqli_connect($dbhost,$dbuser,$dbpass);

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }

   //buat database kampusku jika belum ada
   $query = "CREATE DATABASE IF NOT EXISTS perpustakaan";
   $result = mysqli_query($link, $query);
 
   if(!$result){
     die ("Query Error: ".mysqli_errno($link).
          " - ".mysqli_error($link));
   }
   else {
     echo "Database <strong>'perpustakaan'</strong> berhasil dibuat... <br>";
   }

     //pilih database kampusku
  $result = mysqli_select_db($link, "perpustakaan");

  if(!$result){
    die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
  }
  else {
    echo "Database <b>'perpustakaan'</b> berhasil dipilih... <br>";
  }

   // cek apakah tabel mahasiswa sudah ada. jika ada, hapus tabel
   $query = "DROP TABLE IF EXISTS mahasiswa";
   $hasil_query = mysqli_query($link, $query);
 
   if(!$hasil_query){
     die ("Query Error: ".mysqli_errno($link).
          " - ".mysqli_error($link));
   }
   else {
     echo "Tabel <b>'mahasiswa'</b> berhasil dihapus... <br>";
   }