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
    $_SESSION["nama"] = "Sheila";
    $_SESSION["id"]   = "007";
    $_SESSION["hak_akses"] = "super_user";

    echo $_SESSION["nama"]. "<br>";
    echo $_SESSION["id"]. "<br>";
    echo $_SESSION["hak_akses"];
  ?>
</body>
</html>
