<?php
// cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, cek apakah ada error
    $error = $_FILES["file_upload"]["error"];

    if ($error === 0){

      // siapkan variabel untuk pesan error
      $pesan_error = "";

      // siapkan variabel untuk pemindahan file
      $nama_folder="folder_upload";
      $tmp = $_FILES["file_upload"]["tmp_name"];
      $nama_file = $_FILES["file_upload"]["name"];
      $path_file = "$nama_folder/$nama_file";
      $upload_gagal = false;

      // cek apakah terdapat file dengan nama yang sama
      if (file_exists($path_file)) {
          $pesan_error = "File dengan nama sama sudah ada di server <br>";
          $upload_gagal = true;
         }

      // cek apakah ukuran file tidak melebihi 700KB (716800 byte)
      $ukuran_file = $_FILES["file_upload"]["size"];
      if ($ukuran_file > 716800) {
          $pesan_error .= "Ukuran file melebihi 700KB <br>";
          $upload_gagal = true;
         }
      // pindahkan file upload jika semuanya OK
      if (!$upload_gagal AND move_uploaded_file($tmp,$path_file)){
        $pesan_error = "File sukses di upload";
      }
      else {
        $pesan_error .= "File gagal di upload";
      }
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
    <p>Upload File: <input type="file" name="file_upload" accept=".jpg"></p>        
    <input type="submit" name="submit" value="Proses Upload">
  </form>
</body>
</html>
