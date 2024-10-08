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

  //tampilkan isi tabel mahasiswa
  $data = mysqli_fetch_row($hasil_query);

  echo "<pre>";
  print_r($data);
  echo "<pre>";

  // bebaskan memory
  mysqli_free_result($hasil_query);

  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>
