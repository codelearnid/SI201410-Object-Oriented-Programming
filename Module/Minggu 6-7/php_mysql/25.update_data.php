<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }

  //jalankan query
  $query = "UPDATE mahasiswa SET ipk=4.0 WHERE nama='Riana Putria'";
  $hasil_query = mysqli_query($koneksi, $query);

  //periksa query, tampilkan pesan kesalahan jika gagal
  if($hasil_query) {
     // update berhasil
    echo "Data berhasil di update";
  }
  else {
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  }

  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>
