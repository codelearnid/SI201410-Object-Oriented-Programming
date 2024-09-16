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
  if ($buku == "JavaScript Uncover" or $buku == "MySQL Uncover") {
    $pesan_error .= "Maaf, buku belum tersedia <br>";
  }

  // siapkan variabel untuk re-populate pilihan buku
  $select_html = "";
  $select_css = "";
  $select_php = "";
  $select_javascript = "";
  $select_mysql = "";

  switch ($buku) {
    case "HTML Uncover":
      $select_html       = "selected";
      break;
    case "CSS Uncover":
      $select_css        = "selected";
      break;
    case "PHP Uncover":
      $select_php        = "selected";
      break;
    case "JavaScript Uncover":
      $select_javascript = "selected";
      break;
    case "MySQL Uncover":
      $select_mysql      = "selected";
      break;
  }

  // jika tidak ada error, tampilkan isi form
  if ($pesan_error === "") {
    echo "Form berhasil di proses <br>";
    echo "Buku : $buku <br>";
    die();
  }
} else {
  $pesan_error = "";
  $select_html = "selected";
  $select_css  = "";
  $select_php = "";
  $select_javascript = "";
  $select_mysql = "";
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
        <option value="HTML Uncover" <?php echo $select_html ?>>
          HTML Uncover </option>
        <option value="CSS Uncover" <?php echo $select_css ?>>
          CSS Uncover</option>
        <option value="PHP Uncover" <?php echo $select_php ?>>
          PHP Uncover</option>
        <option value="JavaScript Uncover" <?php echo $select_javascript ?>>
          JavaScript Uncover</option>
        <option value="MySQL Uncover" <?php echo $select_mysql ?>>
          MySQL Uncover</option>
      </select>
    </p>
    <input type="submit" name="submit" value="Proses Data">
  </form>
</body>

</html>