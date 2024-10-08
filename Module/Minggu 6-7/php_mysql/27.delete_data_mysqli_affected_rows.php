<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","universitas");
  
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
      die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
           " - ".mysqli_connect_error());
  }
  
  //jalankan query
  $query = "DELETE FROM mahasiswa WHERE fakultas='FASILKOM' ";
  $query .= "OR fakultas='Ekonomi'";
  $hasil_query = mysqli_query($koneksi, $query);
  
  //periksa query, tampilkan pesan kesalahan jika gagal
  if($hasil_query) {
     // delete berhasil, cek apakah ada data yang dihapus
     if ($jumlah_delete = mysqli_affected_rows($koneksi)) {
       echo "Query berhasil, terdapat $jumlah_delete data yang dihapus."; 
     }
     else {
       echo "Query berhasil, tidak ada data yang dihapus."; 
     }
  } 
  else { 
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  }
    
  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>