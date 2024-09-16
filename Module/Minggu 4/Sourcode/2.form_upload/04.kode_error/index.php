<?php
 // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, proses data
    // siapkan array untuk pesan error
    $arr_upload_error = array( 
            0 => 'File sukses di upload',
            1 => 'Upload gagal, Ukuran file melewati batas maksimal 2MB',
            2 => 'Upload gagal, Ukuran file melewati batas maksimal',
            3 => 'Upload gagal, File hanya ter-upload sebagian',
            4 => 'Upload gagal, Tidak ada file yang terupload',
            6 => 'Upload gagal, Server Error',
            7 => 'Upload gagal, Server Error',
            8 => 'Upload gagal, Server Error',
            ); 
    $error = $_FILES["file_upload"]["error"];
    $pesan_error = $arr_upload_error[$error];  
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
    <p>Upload File: <input type="file" name="file_upload"></p>        
    <input type="submit" name="submit" value="Proses Upload">
  </form>
</body>
</html>