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
  
  //ambil dan tampilkan 1 baris tabel mahasiswa
  $data = mysqli_fetch_array($hasil_query,MYSQLI_NUM);
  echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5] $data[6]";
  // 13012012 James Situmorang Medan 1995-04-02 
  // Kedokteran Kedokteran Gigi 2.70
  
  // bebaskan memory 
  mysqli_free_result($hasil_query);
    
  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>