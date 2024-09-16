<?php
// cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file_upload"]["tmp_name"]);

    echo "<pre>";
    var_dump($check);
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
    <p>Upload File:
      <input type="file" name="file_upload" id="file_upload">
    </p>
    <input type="submit" name="submit" value="Proses Upload">
  </form>
</body>
</html>
