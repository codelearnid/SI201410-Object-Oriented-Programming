<?php
  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, proses data

    // ambil nilai form
    $nama    = htmlentities(strip_tags(trim($_POST["nama"])));
    $email   = htmlentities(strip_tags(trim($_POST["email"])));
    $website = htmlentities(strip_tags(trim($_POST["website"])));

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

    // email harus sesuai dengan format
    if (!empty($website) AND !preg_match("/.+\..+/",$website) ) {
      $pesan_error .= "Format website tidak sesuai";
    }

    // jika tidak ada error, tampilkan isi form
    if ($pesan_error === "") {
      echo "Form berhasil di proses <br>";
      echo "Nama    : $nama <br>";
      echo "Email   : $email <br>";
      echo "Website : $website <br>";
      die();
    }
  }
  else {
    $pesan_error = "";
    $nama        = "";
    $email       = "";
    $website     = "";
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
    <p>Nama: <input type="text" name="nama"
             value="<?php echo $nama ?>" ></p>
    <p>Alamat Email: <input type="text" name="email"
             value="<?php echo $email ?>" ></p>
    <p>Website: <input type="text" name="website"
             value="<?php echo $website ?>" ></p>

    <input type="submit" name="submit" value="Proses Data" >
  </form>
</body>
</html>
