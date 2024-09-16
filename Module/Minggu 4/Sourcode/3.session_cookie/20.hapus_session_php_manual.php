<?php
// mulai session
session_start();

// ambil seluruh data terkait cookie yang digunakan untuk session
$params = session_get_cookie_params();

// set ulang cookie (proses hapus cookie)
setcookie(session_name(), null, time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
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