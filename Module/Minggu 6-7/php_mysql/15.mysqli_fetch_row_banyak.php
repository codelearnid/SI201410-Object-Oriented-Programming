<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }

  //jalankan query
  $query = "SELECT * FROM mahasiswa";
  $hasil_query = mysqli_query($koneksi, $query);

  //periksa query, tampilkan pesan kesalahan jika gagal
  if(!$hasil_query){
     die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
  }

  //ambil dan tampilkan data baris 1
  $data = mysqli_fetch_row($hasil_query);
  echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5] $data[6]";
  echo "<br>";

  //ambil dan tampilkan data baris 2
  $data = mysqli_fetch_row($hasil_query);
  echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5] $data[6]";
  echo "<br>";

  //ambil dan tampilkan data baris 3
  $data = mysqli_fetch_row($hasil_query);
  echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5] $data[6]";
  echo "<br>";

  //ambil dan tampilkan data baris 4
  $data = mysqli_fetch_row($hasil_query);
  echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5] $data[6]";
  echo "<br>";

  //ambil dan tampilkan data baris 5
  $data = mysqli_fetch_row($hasil_query);
  echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5] $data[6]";

  // bebaskan memory
  mysqli_free_result($hasil_query);

  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>
