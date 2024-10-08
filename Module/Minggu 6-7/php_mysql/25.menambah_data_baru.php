<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }

  //jalankan query
  $query = "INSERT INTO mahasiswa VALUES ";
  $query .= "('14021022', 'Surya Permata', 'Ambon', ";
  $query .= "'1996-11-06', 'FASILKOM', 'Ilmu Komputer', 2.8)";

  $hasil_query = mysqli_query($koneksi, $query);

  //periksa query, tampilkan pesan kesalahan jika gagal
  if($hasil_query) {
     // query berhasil dijalankan
    echo "Data baru sukses ditambah";
  }
  else {
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
  }

  // bebaskan memory
//  mysqli_free_result($hasil_query);

  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>
