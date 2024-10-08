<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }

 //jalankan query
  $query = "SELECT * FROM mahasiswa WHERE nim='15021044'";
  $hasil_query = mysqli_query($koneksi, $query);

  // cek jumlah record (baris)
  $jumlah_data = mysqli_num_rows($hasil_query);
  if ($jumlah_data == 1 ) {
    echo "Data ditemukan";
  }
  else {
    echo "Data tidak ditemukan";
  }

  // bebaskan memory
  mysqli_free_result($hasil_query);

  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>
