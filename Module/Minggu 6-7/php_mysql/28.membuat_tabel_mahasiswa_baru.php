<?php
  // buat koneksi dengan database mysql
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "universitas";
  $koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
      die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
           " - ".mysqli_connect_error());
  }

  // cek apakah tabel mahasiswa_baru sudah ada. jika ada, hapus tabel
  $query = "DROP TABLE IF EXISTS mahasiswa_baru";
  $hasil_query = mysqli_query($koneksi, $query);

  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  }

  // buat query untuk CREATE tabel mahasiswa_baru
  $query  = "CREATE TABLE mahasiswa_baru (nim CHAR(8), nama VARCHAR(100), ";
  $query .= "tempat_lahir VARCHAR(50), tanggal_lahir DATE, ";
  $query .= "fakultas VARCHAR(50), jurusan VARCHAR(50), ";
  $query .= "ipk DECIMAL(3,2), PRIMARY KEY (nim))";

  $hasil_query = mysqli_query($koneksi, $query);

  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  }

  // buat query untuk INSERT data ke tabel mahasiswa_baru
  $query  = "INSERT INTO mahasiswa_baru VALUES ";
  $query .= "('14005011', 'Riana Putria', 'Padang', '1996-11-23', ";
  $query .= "'FMIPA', 'Kimia', 3.1), ";
  $query .= "('15021044', 'Rudi Permana', 'Bandung', '1994-08-22', ";
  $query .= "'FASILKOM', 'Ilmu Komputer', 2.9), ";
  $query .= "('15003036', 'Sari Citra Lestari', 'Jakarta', '1997-12-31', ";
  $query .= "'Ekonomi', 'Manajemen', 3.5)";

  $hasil_query = mysqli_query($koneksi, $query);

  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Tabel Mahasiswa</h1>
  <table border="1">
  <tr>
  <th>NIM</th>
  <th>Nama</th>
  <th>Tempat Lahir</th>
  <th>Tanggal Lahir</th>
  <th>Fakultas</th>
  <th>Jurusan</th>
  <th>IPK</th>
  </tr>
  <?php
  // buat query untuk menampilkan seluruh data tabel mahasiswa_baru
  $query = "SELECT * FROM mahasiswa_baru";
  $hasil_query = mysqli_query($koneksi, $query);

  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
  }

  //buat perulangan untuk element tabel dari data mahasiswa_baru
  while($data = mysqli_fetch_assoc($hasil_query))
  {
    echo "<tr>";
    echo "<td>$data[nim]</td>";
    echo "<td>$data[nama]</td>";
    echo "<td>$data[tempat_lahir]</td>";
    echo "<td>$data[tanggal_lahir]</td>";
    echo "<td>$data[fakultas]</td>";
    echo "<td>$data[jurusan]</td>";
    echo "<td>$data[ipk]</td>";
    echo "</tr>";
  }
  
  // bebaskan memory
  mysqli_free_result($hasil_query);
  ?>
  </table>
</body>
</html>
<?php
  // tutup koneksi dengan database mysql
  mysqli_close($koneksi);
?>
