<?php
  // ambil pesan jika ada
  if (isset($_GET["pesan"])){
    $pesan = "<p> {$_GET["pesan"]} <p>";
  }
  else {
    $pesan = "";
  }

  // ambil nilai nama jika ada
  if (isset($_GET["nama"])){
    $nilai_nama = $_GET["nama"];
  }
  else {
    $nilai_nama = "";
  }

  // ambil nilai email jika ada
  if (isset($_GET["email"])){
    $nilai_email = $_GET["email"];
  }
  else {
    $nilai_email = "";
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Halaman Form</h1>
<?php echo $pesan ?>
  <form action="proses.php" method="post">
    <p>Nama: <input type="text" name="nama"
             value="<?php echo $nilai_nama ?>" ></p>
    <p>Email: <input type="text" name="email"
             value="<?php echo $nilai_email ?>" ></p>
    <p><label><input type="checkbox" name="belajar" value="php">
    Belajar PHP</p></label>
    <input type="submit" value="Proses Data" name="submit">
  </form>
</body>
</html>
