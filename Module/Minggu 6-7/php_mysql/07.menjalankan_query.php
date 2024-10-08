<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","root","universitas");

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }

  //jalankan query
  $hasil_query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");

  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
