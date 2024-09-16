<?php
// cek apakah form telah di submit
  if (isset($_POST["submit"])) {

    // tampilkan isi form
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    // ... pemrosesan form disini..
    // ... pemrosesan form disini..
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Upload File</h1>
  <form action="index.php" method="post" enctype="multipart/form-data">
    <p>Upload File 1: <input type="file" name="file_upload1"></p>
    <p>Upload File 2: <input type="file" name="file_upload2"></p>
    <p>Upload File 3: <input type="file" name="file_upload3"></p>
    <input type="submit" name="submit" value="Proses Upload">
  </form>
</body>
</html>
