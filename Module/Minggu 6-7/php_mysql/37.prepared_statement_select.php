<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }

  // siapkan data
  $nama = "Riana Putria";
  $ipk = 3.10;

  // buat query: prepare
  $query = "SELECT * FROM mahasiswa WHERE nama = ? AND ipk = ?";
  $stmt = mysqli_prepare($koneksi, $query);

  // hubungkan data dengan prepared statements :bind
  mysqli_stmt_bind_param($stmt, "sd", $nama, $ipk);

  // jalankan query: execute
  $sukses = mysqli_stmt_execute($stmt);

  // cek apakah query berhasil
  if(!$sukses){
    die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
  }

  // ambil hasil query
  $hasil_query = mysqli_stmt_get_result($stmt);

  //tampilkan data
  while($data = mysqli_fetch_row($hasil_query)) {
    echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5] $data[6]";
  }

  // bebaskan memory
  mysqli_stmt_free_result($stmt);

  // tutup statement
  mysqli_stmt_close($stmt);

  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>
