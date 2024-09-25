<?php
  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {

    // ambil nilai form
    // htmlentities digunakan untuk mengkonversi karakter khusus HTML menjadi entitas HTML untuk mencegah XSS.
    // strip_tags digunakan untuk menghapus tag HTML dan PHP dari string.
    // trim digunakan untuk menghapus whitespace dari awal dan akhir string.
    $nama  = htmlentities(strip_tags(trim($_POST["nama"])));
    $email = htmlentities(strip_tags(trim($_POST["email"])));

    // siapkan variabel untuk menampung pesan error
    $pesan_error="";

    // cek apakah "nama" sudah diisi dan panjang karakter >= 5
    if (empty($nama)) {
      $pesan_error .= "Nama belum diisi <br>";
    }
     else if (strlen($nama) < 5) {
      $pesan_error .= "Nama minimal 5 digit <br>";
    }

    // cek apakah "email" sudah diisi dan memiliki karakter '@'
    if (empty($email)) {
      $pesan_error .= "Email belum diisi <br>";
    }
    else if (strpos($email,"@") === false) {
      $pesan_error .= "Penulisan alamat email salah <br>";
    }

    // jika tidak ada error, tampilkan isi form
    if ($pesan_error == "") {
      echo "<h1>Form Berhasil di Proses </h1>";
      echo "Nama  : $nama <br>";
      echo "Email : $email";
      die();
    }
  }
  else {
    $pesan_error = "";
    $nama        = "";
    $email       = "";
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Form Register</h1>
  <?php echo $pesan_error; ?>
  <form action="index.php" method="post">
    <p>Nama: <input type="text" name="nama"
             value="<?php echo $nama ?>" ></p>
    <p>Email: <input type="text" name="email"
             value="<?php echo $email ?>" ></p>
    <input type="submit" name="submit" value="Proses Data" >
  </form>
</body>
</html>
