<?php
  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {

    // form telah disubmit, proses data
      echo "<h1>Form Berhasil di Proses </h1>";
      echo "Nama : {$_POST["nama"]} <br>";
      echo "Email : {$_POST["email"]}";
      die();
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Form Register</h1>
  <form action="index.php" method="post">
    <p>Nama: <input type="text" name="nama"></p>
    <p>Email: <input type="text" name="email"></p>
    <input type="submit" name="submit" value="Proses Data" >
  </form>
</body>
</html>
