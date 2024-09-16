<?php
  // cek apakah ukuran file melewati batas maksimal
  if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_FILES) && empty($_POST)) {
    // batas maksimum terlewati, buat pesan error
    $postMax = ini_get('post_max_size');
    $pesan_error = "Ukuran file melewati batas maksimal ({$postMax}B)";
   }

  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, cek apakah ada error
    $error = $_FILES["file_upload"]["error"];
    if ($error === 0){
       $pesan_error = "File sukses di upload";
    }
    else {
       $pesan_error = "File gagal di upload";
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
<?php if (!empty($pesan_error)) {echo "<p>$pesan_error</p>";} ?>
  <form action="index.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <p>Upload File: <input type="file" name="file_upload"></p>
    <input type="submit" name="submit" value="Proses Upload">
  </form>
</body>
</html>
