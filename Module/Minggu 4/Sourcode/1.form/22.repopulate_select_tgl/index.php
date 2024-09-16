<?php
    // buat array untuk tanggal
    $arr_bln = array( "1"=>"Januari",
                      "2"=>"Februari",
                      "3"=>"Maret",
                      "4"=>"April",
                      "5"=>"Mei",
                      "6"=>"Juni",
                      "7"=>"Juli",
                      "8"=>"Agustus",
                      "9"=>"September",
                      "10"=>"Oktober",
                      "11"=>"Nopember",
                      "12"=>"Desember" );

  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, proses data

    // ambil nilai form
    $tgl = htmlentities(strip_tags(trim($_POST["tgl"])));
    $bln = htmlentities(strip_tags(trim($_POST["bln"])));
    $thn = htmlentities(strip_tags(trim($_POST["thn"])));

    // siapkan variabel untuk menampung pesan error
    $pesan_error="";

    // cek apakah "tgl" < 10
    if ($tgl <= 10) {
      $pesan_error .= "Maaf, tanggal harus > 10 <br>";
    }

    // jika tidak ada error, tampilkan isi form
    if ($pesan_error === "") {
      echo "Form berhasil di proses <br>";
      echo "Tanggal dikirim : $tgl - $bln - $thn <br>";
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
   <p>
    <label for="tgl" >Tanggal Dikirim : </label>
      <select name="tgl" id="tgl">
        <?php
          for ($i = 1; $i <= 31; $i++) {
            echo "<option value = $i >";
            echo str_pad($i,2,"0",STR_PAD_LEFT);
            echo "</option>";
          }
        ?>
      </select>
        <select name="bln">
        <?php
        foreach ($arr_bln as $key => $value) {
          echo "<option value=\"{$key}\">{$value}</option>";
        }
        ?>
      </select>
      <select name="thn">
        <?php
          for ($i = 2019; $i <= 2025; $i++) {
            echo "<option value = $i >";
            echo "$i </option>";
          }
        ?>
      </select>
  </p>
    <input type="submit" name="submit" value="Proses Data" >
  </form>
</body>
</html>
