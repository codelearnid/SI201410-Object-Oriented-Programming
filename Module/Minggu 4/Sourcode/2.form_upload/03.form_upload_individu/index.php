<?php
 // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, proses data
    echo "Nama File (dari kotak input) = ".$_POST["nama_file"]."<br>";
    // tampilkan informasi tentang file yang diupload
    echo "Nama File   = ".$_FILES["file_upload"]["name"]."<br>";
    echo "MIME Type   = ".$_FILES["file_upload"]["type"]."<br>";
    echo "Temporary   = ".$_FILES["file_upload"]["tmp_name"]."<br>";
    echo "Kode Error  = ".$_FILES["file_upload"]["error"]."<br>";
    echo "Ukuran File = ".$_FILES["file_upload"]["size"];
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
    <p>Nama File : <input type="text" name="nama_file"></p>
    <p>Upload File: <input type="file" name="file_upload"></p>
    <input type="submit" name="submit" value="Proses Upload">
  </form>
</body>
</html>
