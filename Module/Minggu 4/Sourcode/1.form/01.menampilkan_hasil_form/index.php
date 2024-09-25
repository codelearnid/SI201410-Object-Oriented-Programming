<!DOCTYPE html>
<!-- Deklarasi dokumen HTML -->
<html lang="id">
<!-- Mendefinisikan bahasa dokumen -->
<head>
  <meta charset="UTF-8">
  <!-- Mengatur karakter encoding -->
  <title>Belajar PHP</title>
  <!-- Judul halaman -->
</head>
<body>
<h1>Pemrosesan Form</h1>
<!-- Judul konten -->
  <form action="proses.php" method="post">
    <!-- Mengarahkan form ke halaman proses.php dengan metode POST -->
    <p>Nama: <input type="text" name="nama"></p>
    <!-- Input untuk nama -->
    <p>Password: <input type="password" name="password"></p>
    <!-- Input untuk password -->
    <input type="submit" value="Proses Data" >
    <!-- Tombol untuk mengirim form -->
  </form>
</body>
</html>