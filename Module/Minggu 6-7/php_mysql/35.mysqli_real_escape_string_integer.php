<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
      die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
           " - ".mysqli_connect_error());
  }

 // buat data seolah-olah dari form
  $_POST['ipk'] = 3.2 ."'; DROP TABLE mahasiswa'";

  // buat query
  $ipk = (float) $_POST['ipk'] ; // type casting menjadi float
  $query = "SELECT * FROM mahasiswa WHERE ipk = {$ipk}";

  echo $query;
  // SELECT * FROM mahasiswa WHERE ipk = 3.2

  $hasil_query = mysqli_query($koneksi, $query);

  //ambil dan tampilkan data
  while($data = mysqli_fetch_assoc($hasil_query)) {
    echo "$data[nim] $data[nama] $data[tempat_lahir] ";
    echo "$data[tanggal_lahir] $data[fakultas] ";
    echo "$data[jurusan] $data[ipk]";
    echo "<br>";
  }

  // bebaskan memory
  mysqli_free_result($hasil_query);

  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>
