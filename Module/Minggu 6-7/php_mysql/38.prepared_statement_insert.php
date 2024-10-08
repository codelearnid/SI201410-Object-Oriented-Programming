<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }

  // siapkan data
  $nim       = "14009037";
  $nama      = "Luna Priscila";
  $tmp_lhr   = "Jakarta";
  $tgl_lhr   = "1996-04-22";
  $fakultas  = "Sastra";
  $jurusan   = "Bahasa Inggris";
  $ipk       = 3.9;

  // buat query: prepare
  $query = "INSERT INTO mahasiswa VALUES (?, ?, ?, ?, ?, ?, ?)";
  $stmt = mysqli_prepare($koneksi, $query);

  // hubungkan data dengan prepared statements :bind
  mysqli_stmt_bind_param($stmt, "ssssssi",
  $nim, $nama, $tmp_lhr, $tgl_lhr, $fakultas, $jurusan, $ipk );

  // jalankan query: execute
  $sukses = mysqli_stmt_execute($stmt);

  // cek apakah query berhasil
  if (!$sukses) {
    die('Query Error : '.mysqli_errno($koneksi).' - '.mysqli_error($koneksi));
  }
  else {
    echo "Penambahan ".mysqli_stmt_affected_rows($stmt)." data berhasil<br>";
  }

  // tutup statement
  mysqli_stmt_close($stmt);

  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>
