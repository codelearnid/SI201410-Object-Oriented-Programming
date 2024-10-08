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
  $query = "SELECT * FROM mahasiswa WHERE nama='$nama'";

  echo $query;
  // SELECT * FROM mahasiswa WHERE nama='James Situmorang'

  $hasil_query = mysqli_query($koneksi, $query);

  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>
