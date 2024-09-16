<?php
// cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, cek apakah ada error
    $error = $_FILES["file_upload"]["error"];
    
    if ($error === 0){
       // tidak ada error
       $pesan_error = "File sukses di upload"; 
       
       // pindahkan file ke folder_upload
       $nama_folder="folder_upload";
       $tmp = $_FILES["file_upload"]["tmp_name"];
       $nama_file = $_FILES["file_upload"]["name"];
       move_uploaded_file($tmp, "$nama_folder/$nama_file");  
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