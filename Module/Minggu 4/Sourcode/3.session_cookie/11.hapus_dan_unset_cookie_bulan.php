<?php
  // hapus cookie, perintah akan dikirim ke web browser
  setcookie("bulan",null,time()-60);
  
  // hapus isi variabel cookie hanya untuk halaman ini
  unset($_COOKIE["bulan"]);
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
    if (isset($_COOKIE["bulan"])) {
      echo "Isi dari cookie 'bulan' adalah: ".$_COOKIE["bulan"];
    }
    else {
      echo "Cookie 'bulan' sudah dihapus";
    }
  ?>
</body>
</html>