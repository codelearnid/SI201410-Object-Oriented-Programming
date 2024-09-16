<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Cookie</h1>
  <?php
    if (isset($_COOKIE["nama"])) {
       echo "Isi dari cookie 'nama' adalah: ".$_COOKIE["nama"];
    }
    else {
       echo "Cookie 'nama' belum ada";
    }
  ?>
</body>
</html>