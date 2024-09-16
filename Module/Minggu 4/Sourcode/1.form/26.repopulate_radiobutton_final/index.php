<?php
  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, proses data

    // ambil nilai form
    $kurir = htmlentities(strip_tags(trim($_POST["kurir"])));

    // siapkan variabel untuk menampung pesan error
    $pesan_error="";

    // validasi untuk test
    if (true) {
      $pesan_error .= "Maaf, ini hanya percobaan <br>";
    }

    // siapkan variabel untuk re-populate pilihan kurir
    $checked_jne="";$checked_tiki="";$checked_pos="";

    switch($kurir) {
     case "JNE"  : $checked_jne  = "checked";  break;
     case "TIKI" : $checked_tiki = "checked";  break;
     case "POS"  : $checked_pos  = "checked";  break;
    }

    // jika tidak ada error, tampilkan isi form
    if ($pesan_error === "") {
      echo "Form berhasil di proses <br>";
      echo "Tambahan : $tambahan_dvd $tambahan_kado <br>";
      die();
    }
  }
  else {
    $pesan_error  = "";
    $checked_jne  = "checked";
    $checked_tiki = "";
    $checked_pos  = "";
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
  <p>
    Kurir Pengiriman :
    <label><input type="radio" name="kurir" value="JNE"
    <?php echo $checked_jne ?>>JNE</label>
    <label><input type="radio" name="kurir" value="TIKI"
    <?php echo $checked_tiki ?>>TIKI</label>
    <label><input type="radio" name="kurir" value="POS"
    <?php echo $checked_pos ?>>POS</label>
  </p>
    <input type="submit" name="submit" value="Proses Data" >
  </form>
</body>
</html>
