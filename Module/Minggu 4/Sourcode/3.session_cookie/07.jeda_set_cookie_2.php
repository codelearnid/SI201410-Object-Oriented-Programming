<?php
  setcookie("kota","Bandung");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Cookie</h1>
  <?php
    if (isset($_COOKIE["kota"])) {
       echo "Isi dari cookie 'kota' adalah: ".$_COOKIE["kota"];
    }
    else {
       echo "Cookie 'kota' belum ada";
    }
  ?>
</body>
</html>