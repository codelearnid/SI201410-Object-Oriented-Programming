<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Halaman Proses</h1>
<?php
  if (isset($_POST["nama"])) {
    echo "Nama: ".$_POST["nama"]."<br>"; 
  }
  if (isset($_POST["email"])) {
    echo "Email: ".$_POST["email"]."<br>";
  } 
  if (isset($_POST["belajar"])) {
    echo "Belajar: ".$_POST["belajar"]."<br>"; 
  }
?>
</body>
</html>