<?php
// mulai session
session_start();

// set ulang cookie (proses hapus cookie)
setcookie("PHPSESSID", null, time() - 42000, "/", "", "", "");

// hapus file session di dalam server
session_destroy();
?> 
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
  <h1>Session</h1>
</body>
</html>