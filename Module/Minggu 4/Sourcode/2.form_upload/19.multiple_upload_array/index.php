<?php
// cek apakah form telah di submit
  if (isset($_POST["submit"])) {

    // hitung jumlah file upload
    $jumlah_file = count($_FILES["file_upload"]["name"]);

    // pindahkan seluruh file ke folder_upload
    $nama_folder = "folder_upload";
    for ($i = 0; $i < $jumlah_file; $i++) {
      $tmp = $_FILES["file_upload"]["tmp_name"][$i];
      $nama_file = $_FILES["file_upload"]["name"][$i];
      move_uploaded_file($tmp, "$nama_folder/$nama_file");
    }
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
    <p>Upload File: <input type="file" name="file_upload[]" multiple></p>
    <input type="submit" name="submit" value="Proses Upload">
  </form>
</body>
</html>
