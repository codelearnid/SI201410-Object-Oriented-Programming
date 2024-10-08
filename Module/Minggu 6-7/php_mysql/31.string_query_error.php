<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
      die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
           " - ".mysqli_connect_error());
  }

   // buat query
  $nama = "Sa'id Rahmat";
  $query = "SELECT * FROM mahasiswa WHERE nama = '{$nama}'";

  echo $query;
  // SELECT * FROM mahasiswa WHERE nama = 'Sa'id Rahmat'

  $hasil_query = mysqli_query($koneksi, $query);

  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  }

  // Query Error: 1064 - You have an error in your SQL syntax;
  // check the manual that corresponds to your MariaDB server version
  // for the right syntax to use near 'id Rahmat'' at line 1

  //ambil dan tampilkan data
  while($data = mysqli_fetch_assoc($hasil_query))  {
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
