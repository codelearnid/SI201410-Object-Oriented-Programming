<?php
  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, proses data

    // ambil nilai form
    $buku = htmlentities(strip_tags(trim($_POST["buku"])));

    // siapkan variabel untuk menampung pesan error
    $pesan_error = "";

    // cek apakah "buku" sudah dipilih atau tidak
    if (empty($buku)) {
      $pesan_error .= "Buku belum dipilih <br>";
    }

    // cek buku = JavaScript Uncover atau MySQL Uncover
    if ($buku == "JavaScript Uncover" OR $buku == "MySQL Uncover") {
      $pesan_error .= "Maaf, buku belum tersedia <br>";
    }
    
    // jika tidak ada error, tampilkan isi form
    if ($pesan_error === "") {
      echo "Form berhasil di proses <br>";
      echo "Buku : $buku <br>";
      die();
    }
  }
  else {
    $pesan_error = "";
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Pemrosesan Form</h1>
  <?php echo $pesan_error; ?>
  <form action="index.php" method="post">
  <p>Jenis Buku :
    <select name="buku" id="buku">
      <option value="HTML Uncover">HTML Uncover</option>
      <option value="CSS Uncover">CSS Uncover</option>
      <option value="PHP Uncover">PHP Uncover</option>
      <option value="JavaScript Uncover">JavaScript Uncover</option>
      <option value="MySQL Uncover">MySQL Uncover</option>
    </select>
  </p>
    <input type="submit" name="submit" value="Proses Data" >
  </form>
</body>
</html>
