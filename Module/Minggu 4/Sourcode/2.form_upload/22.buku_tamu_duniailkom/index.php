<?php
  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, proses data

    // ambil nilai form kecuali file upload
    $nama     = htmlentities(strip_tags(trim($_POST["nama"])));
    $email    = htmlentities(strip_tags(trim($_POST["email"])));
    $komentar = htmlentities(strip_tags(trim($_POST["komentar"])));

    // siapkan variabel untuk menampung pesan error
    $pesan_error = "";

    // cek apakah "nama" sudah diisi atau tidak
    if (empty($nama)) {
      $pesan_error .= "Nama belum diisi <br>";
    }

    // cek apakah "email" sudah diisi atau tidak
    if (empty($email)) {
      $pesan_error .= "Email belum diisi <br>";
    }
    // email harus sesuai dengan format
    elseif (!preg_match("/.+@.+\..+/",$email) ) {
      $pesan_error .= "Format email tidak sesuai <br>";
    }

    // cek apakah gambar berhasil di upload
    $upload_error = $_FILES["file_upload"]["error"];
    if ($upload_error !== 0){
       // gambar gagal di upload siapkan pesan error
       $arr_upload_error = array(
                           1 => 'Ukuran file melewati batas maksimal',
                           2 => 'Ukuran file melewati batas maksimal 1MB',
                           3 => 'File hanya ter-upload sebagian',
                           4 => 'Tidak ada file yang terupload',
                           6 => 'Server Error',
                           7 => 'Server Error',
                           8 => 'Server Error',
                           );
       $pesan_error .= $arr_upload_error[$upload_error];
    }
    else {
    // tidak ada error, masuk ke validasi file upload berikutnya
      // periksa apakah ada file dengan nama yg sama
      $nama_folder = "folder_upload";
      $nama_file = $_FILES["file_upload"]["name"];
      $path_file = "$nama_folder/$nama_file";

      if (file_exists($path_file)) {
       $pesan_error .= "File dengan nama sama sudah ada di server <br>";
      }

      // cek apakah ukuran file tidak melebihi 1MB(1048576 byte)
      $ukuran_file = $_FILES["file_upload"]["size"];
      if ($ukuran_file > 1048576) {
        $pesan_error .= "Ukuran file melebihi 700KB <br>";
      }

      // cek apakah memang file gambar
      $check = getimagesize($_FILES["file_upload"]["tmp_name"]);
      if ($check === false) {
        $pesan_error .= "Mohon upload file gambar (gif, png, atau jpg )";
      }
    }

    // jika lolos validasi, proses form dan tampilkan
    if ($pesan_error === "") {
       // pindahkan file ke folder_upload
       $nama_folder="folder_upload";
       $tmp = $_FILES["file_upload"]["tmp_name"];
       $nama_file = $_FILES["file_upload"]["name"];
       move_uploaded_file($tmp, "$nama_folder/$nama_file");

       // semua OK, tampilkan hasil form dan bye-bye
      include("bukutamu.php");
      die();
    }
  }
  else {
    // form belum disubmit atau halaman ini tampil untuk pertama kali
    // berikan nilai awal untuk semua isian form
    $pesan_error = "";
    $nama        = "";
    $email       = "";
    $komentar    = "";
  }

  // cek apakah ukuran file melewati batas post_max_size
  // ditempatkan disini agar variabel $pesan_error tidak ter-reset
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_FILES) && empty($_POST) ) {
    $postMax = ini_get('post_max_size');
    $pesan_error = "Ukuran file melewati batas maksimal ({$postMax}B)";
   }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
  <style>
    body {
      background-color: #F8F8F8;
    }
    div.container {
      width: 450px;
      padding: 10px 80px 30px;
      background-color: white;
      margin: 20px auto;
      box-shadow: 1px 0px 10px, -1px 0px 10px ;
    }
    h1 {
      text-align: center;
      font-family: Cambria, "Times New Roman", serif;
    }
    p {
      margin:0;
    }
    fieldset {
      padding:20px;
    }
    input, textarea {
      margin-bottom:10px;
    }
    label {
      width:110px;
      float:left;
      margin-right:10px;
    }
    .error {
      background-color: #FFECEC;
      padding: 10px 15px;
      margin: 0 0 20px 0;
      border: 1px solid red;
      box-shadow: 1px 0px 3px red ;
    }
  </style>
</head>
<body>

<div class="container">
<h1>Buku Tamu Codelearn</h1>
<?php
  // tampilkan error jika ada
  if ($pesan_error !== "") {
    echo "<div class=\"error\">$pesan_error</div>";
  }
?>
<form action="index.php" method="post" enctype="multipart/form-data" >
<fieldset>
<legend>Buku Tamu</legend>
  <p>
    <label for="nama">Nama : </label>
    <input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
  </p>
  <p>
    <label for="email">Email : </label>
    <input type="text" name="email" id="email" value="<?php echo $email ?>">
  </p>
  <p>
    <label for="komentar">Komentar: </label>
    <textarea name="komentar" cols="25" name="komentar"><?php echo $komentar; ?></textarea>
  </p>
  <p>
    <label for="file_upload">Display Picture: </label>
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
    <input type="file" name="file_upload" id="file_upload" accept="image/*">
  </p>
</fieldset>
  <br>
  <p>
    <input type="submit" name="submit" value="Posting Komentar">
  </p>
</form>

</div>

</body>
</html>
