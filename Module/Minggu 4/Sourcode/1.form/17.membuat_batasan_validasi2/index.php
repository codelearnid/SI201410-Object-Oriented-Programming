<?php
  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, proses data

    // ambil nilai form
    $buku   = htmlentities(strip_tags(trim($_POST["buku"])));
    $jumlah = htmlentities(strip_tags(trim($_POST["jumlah"])));
    $ongkir = htmlentities(strip_tags(trim($_POST["ongkir"])));

    // siapkan variabel untuk menampung pesan error
    $pesan_error = "";

    // cek apakah "buku" ada di pilihan
    $array_buku = ["html uncover","css uncover","php uncover"];
    $buku = strtolower($buku);

    if (!in_array($buku,$array_buku)) {
      $pesan_error .= "Buku tidak tersedia<br>";
    }

    // jumlah pesanan harus berupa angka
    if (!is_numeric($jumlah)) {
      $pesan_error .= "Jumlah buku harus dalam satuan angka<br>";
    }
    // jumlah pesanan harus antara 1 sampai 10
    elseif ($jumlah <= 0 OR $jumlah > 10) {
      $pesan_error .= "Jumlah buku antara 1-10<br>";
    }
    // jumlah pesanan harus angka bulat
    elseif ($jumlah != round($jumlah)) {
      $pesan_error .= "Jumlah buku harus dalam angka bulat<br>";
    }

    // ongkos kirim harus berupa angka
    if (!is_numeric($ongkir) OR ($ongkir < 5000) OR (($ongkir % 1000) != 0)) {
    $pesan_error .= "Ongkos kirim harus dalam kelipatan 1000 (minimal 5000)";
    }

    // jika tidak ada error, tampilkan isi form
    if ($pesan_error === "") {
      echo "Form berhasil di proses <br>";
      echo "Nama Buku : $buku <br>";
      echo "Jumlah Pesanan : $jumlah <br>";
      echo "Ongkos Kirim : $ongkir <br>";
      die();
    }
  }
  else {
    $pesan_error = "";
    $buku = "";
    $jumlah = "";
    $ongkir = "";
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
    <p>Jenis Buku: <input type="text" name="buku"
             value="<?php echo $buku ?>" ></p>
    <p>Jumlah Pesanan: <input type="text" name="jumlah"
             value="<?php echo $jumlah ?>" ></p>
    <p>Ongkos Kirim: <input type="text" name="ongkir"
             value="<?php echo $ongkir ?>" ></p>

    <input type="submit" name="submit" value="Proses Data" >
  </form>
</body>
</html>
