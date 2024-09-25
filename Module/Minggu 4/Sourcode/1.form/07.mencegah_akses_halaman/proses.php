<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Halaman Proses</h1>
<?php
  // Menampilkan nama yang diinputkan jika ada
  if (isset($_POST["nama"])) {
    echo "Nama: ".$_POST["nama"]."<br>"; 
  }
  // Menampilkan email yang diinputkan jika ada
  if (isset($_POST["email"])) {
    echo "Email: ".$_POST["email"]."<br>";
  } 
  // Menampilkan pilihan belajar PHP jika checkbox di centang
  if (isset($_POST["belajar"])) {
    echo "Belajar: ".$_POST["belajar"]."<br>"; 
  }
?>
</body>
</html>