<?php
 // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, proses data
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
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
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <p>Upload File: <input type="file" name="file_upload"></p>        
    <input type="submit" name="submit" value="Proses Upload">
  </form>
</body>
</html>