<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Halaman Proses</h1>
<?php
  echo "Nama: ".$_POST["nama"]."<br>"; 
  echo "NIM: ".$_POST["nim"]."<br>"; 
  echo "Tanggal Lahir: ".$_POST["tgl"]." - ".$_POST["bln"].
                       " - ".$_POST["thn"]."<br>";       
  echo "Alamat: ".$_POST["alamat"]."<br>"; 
  echo "Jenis Kelamin: ".$_POST["kel"]."<br>"; 
  echo "Username: ".$_POST["username"]."<br>"; 
  echo "Alamat Email: ".$_POST["email"]."<br>"; 
  echo "Password: ".$_POST["password"]."<br>"; 
  echo "Konfirmasi Password: ".$_POST["repassword"]."<br>"; 
  echo "Target1: ".$_POST["target1"]."<br>"; 
  echo "Target2: ".$_POST["target2"]."<br>"; 
  echo "Target3: ".$_POST["target3"]     
?>
</body>
</html>