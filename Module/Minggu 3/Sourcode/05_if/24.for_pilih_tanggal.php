<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
Pilih Tanggal :
<select name="tgl">
  <?php
    for ($i = 1; $i <= 31; $i++)  {
      echo "<option value = $i > $i </option>";
    }
  ?>
</select>
</body>
</html>
