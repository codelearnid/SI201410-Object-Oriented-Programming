<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>

<body>
  <h1>Halaman Form</h1>
  <form action="proses.php" method="post">
    <p>Nama: <input type="text" name="nama"></p>
    <p>Email: <input type="text" name="email"></p>
    <p>
      <label><input type="checkbox" name="belajar" value="php">
        Belajar PHP</label>
    </p>
    <input type="submit" value="Proses Data">
  </form>
</body>

</html>