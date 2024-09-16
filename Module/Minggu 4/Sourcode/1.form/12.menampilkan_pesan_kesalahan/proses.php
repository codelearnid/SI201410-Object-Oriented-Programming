<?php
  if (!isset($_POST["submit"])) {
    header("Location: index.php");
  }

  // ambil nilai form
  $nama  = trim($_POST["nama"]);
  $email = trim($_POST["email"]);

  // cek apakah "nama" sudah diisi atau tidak
  if (empty($nama)) {
    $pesan = urlencode("Nama harus diisi");
    header("Location: index.php?pesan=$pesan");
    die();
  }

  // cek apakah "email" sudah diisi atau tidak
  if (empty($email)) {
    $pesan = urlencode("Email harus diisi");
    header("Location: index.php?pesan=$pesan");
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
<h1>Halaman Proses</h1>
<?php
  echo "Nama: $nama <br>";
  echo "Email: $email <br>";
  if (isset($_POST["belajar"])) {
    echo "Belajar: ".$_POST["belajar"]."<br>";
  }
?>
</body>
</html>
