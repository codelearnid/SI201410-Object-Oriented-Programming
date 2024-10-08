<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }

  //jalankan query
  $nama = "James Situmorang";
  $query = "SELECT * FROM mahasiswa WHERE nama=$nama";
  $hasil_query = mysqli_query($koneksi, $query);

  //periksa query, tampilkan pesan kesalahan jika gagal
  if(!$hasil_query){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
  }

  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
