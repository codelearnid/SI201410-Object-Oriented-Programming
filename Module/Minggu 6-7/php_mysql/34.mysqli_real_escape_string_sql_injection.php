<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
      die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
           " - ".mysqli_connect_error());
  }

  // buat data seolah-olah dari form
  $_POST['nama'] = "Riana Putria'; DROP TABLE mahasiswa;";

  // buat query
  $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
  $query = "SELECT * FROM mahasiswa WHERE nama = '{$nama}'";

  echo $query;
  // SELECT * FROM mahasiswa WHERE nama = 'Riana Putria\';
  // DROP TABLE mahasiswa;'

  $hasil_query = mysqli_query($koneksi, $query);

  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  }

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
