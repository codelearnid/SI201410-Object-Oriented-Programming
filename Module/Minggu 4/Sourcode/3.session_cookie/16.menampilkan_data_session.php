<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Session</h1>
  <?php
    echo "Nama = ".$_SESSION["nama"]."<br>";
    echo "ID = ".$_SESSION["id"]."<br>";
    echo "Hak akses = ".$_SESSION["hak_akses"];
  ?>
</body>
</html>