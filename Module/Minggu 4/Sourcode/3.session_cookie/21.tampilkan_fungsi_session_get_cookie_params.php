<?php
// mulai session
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
    // ambil seluruh data terkait cookie yang digunakan untuk session
    $params = session_get_cookie_params();
    echo "<pre>";
      print_r($params);
    echo "<pre>";
  ?> 
</body>
</html>