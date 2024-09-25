<?php
  // siapkan array untuk nama bulan
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

    // ambil nilai form kecuali checkbox
    $nama   = htmlentities(strip_tags(trim($_POST["nama"])));
    $email  = htmlentities(strip_tags(trim($_POST["email"])));
    $buku   = htmlentities(strip_tags(trim($_POST["buku"])));
    $jumlah = htmlentities(strip_tags(trim($_POST["jumlah"])));
    $alamat = htmlentities(strip_tags(trim($_POST["alamat"])));
    $kurir  = htmlentities(strip_tags(trim($_POST["kurir"])));
    $ongkir = htmlentities(strip_tags(trim($_POST["ongkir"])));
    $tgl    = htmlentities(strip_tags(trim($_POST["tgl"])));
    $bln    = htmlentities(strip_tags(trim($_POST["bln"])));
    $thn    = htmlentities(strip_tags(trim($_POST["thn"])));

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

    // siapkan variabel untuk menggenerate pilihan buku
    $select_html=""; $select_css=""; $select_php="";
    $select_javascript=""; $select_mysql="";

    switch($buku) {
     case "HTML Uncover"       : $select_html       = "selected";  break;
     case "CSS Uncover"        : $select_css        = "selected";  break;
     case "PHP Uncover"        : $select_php        = "selected";  break;
     case "JavaScript Uncover" : $select_javascript = "selected";  break;
     case "MySQL Uncover"      : $select_mysql      = "selected";  break;
    }

    // cek apakah "alamat" sudah diisi atau tidak
    if (empty($alamat)) {
      $pesan_error .= "Alamat Pengiriman belum diisi <br>";
    }

    // siapkan variabel untuk menggenerate pilihan kurir
    $checked_jne="";$checked_tiki="";$checked_pos="";

    switch($kurir) {
     case "JNE"  : $checked_jne  = "checked";  break;
     case "TIKI" : $checked_tiki = "checked";  break;
     case "POS"  : $checked_pos  = "checked";  break;
    }

    // ongkos kirim harus berupa angka dan kelipatan 1000
    if (!is_numeric($ongkir) OR ($ongkir <=0) OR (($ongkir % 1000) != 0)) {
      $pesan_error .= "Ongkos kirim harus dalam kelipatan 1000";
    }

    if (isset($_POST["dvd"])) {
      $checked_dvd  = "checked";
      $tambahan_dvd = "+ DVD eBook";
    }
    else {
      $checked_dvd  = "";
      $tambahan_dvd = "";
    }

    if (isset($_POST["kado"])) {
      $checked_kado  = "checked";
      $tambahan_kado = "+ Bungkus Kado";
    }
    else {
      $checked_kado  = "";
      $tambahan_kado = "";
    }

    // jika tidak ada error, tampilkan isi form
    if ($pesan_error === "") {
      include("pembelian.php"); // hasil form ditampilkan oleh halaman ini
      die();
    }
  }
  else {
    // form belum disubmit atau halaman ini tampil untuk pertama kali
    // berikan nilai awal untuk semua isian form
    $pesan_error   = "";
    $nama          = "";
    $email         = "";
    $select_html   = "selected";
    $select_css    = ""; $select_php  = ""; $select_javascript = "";
    $select_mysql  = "";
    $jumlah        = 0;
    $alamat        = "";
    $checked_jne   = "checked";
    $checked_tiki  = ""; $checked_pos = "";
    $ongkir        = "";
    $tgl = 1; $bln = "1"; $thn = 2019;
    $checked_dvd   = ""; $checked_kado = "";
    $tambahan_kado = ""; $tambahan_dvd = "";
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
      width: 500px;
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
      margin: 5px 0;
    }
    fieldset {
      padding: 20px;
    }
    input, select, textarea {
      margin-bottom: 10px;
    }
    label {
      width: 150px;
      float: left;
      margin-right: 10px;
    }
    .radio {
      width: 55px;
      float: none;
    }
    label[for="dvd"], label[for="kado"] {
      float: none;
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
<h1>Pembelian Buku CodeLearn</h1>
<?php
  // tampilkan error jika ada
  if ($pesan_error !== "") {
      echo "<div class=\"error\">$pesan_error</div>";
  }
?>
<form action="index.php" method="post">
<fieldset>
<legend>Form Order</legend>
  <p>
    <label for="nama">Nama : </label>
    <input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
  </p>
  <p>
    <label for="email">Email : </label>
    <input type="text" name="email" id="email" value="<?php echo $email ?>">
  </p>
  <p>
    <label for="buku" >Jenis Buku : </label>
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
  <p>
    <label for="jumlah">Jumlah Buku : </label>
    <select name="jumlah" id="jumlah">
        <?php
          for ($i = 1; $i <= 10; $i++) {
            if ($i==$jumlah){
              echo "<option value = $i selected>";
            }
            else {
              echo "<option value = $i >";
            }
            echo $i;
            echo "</option>";
          }
        ?>
      </select>
  </p>
  <p>
    <label for="alamat">Alamat Pengiriman : </label>
    <textarea name="alamat" cols="25" name="alamat">
      <?php echo $alamat; ?>
    </textarea>
  </p>
    <p>
    <label>Kurir Pengiriman :</label>
    <label class="radio"><input type="radio" name="kurir" value="JNE"
    <?php echo $checked_jne ?>>JNE</label>
    <label class="radio"><input type="radio" name="kurir" value="TIKI"
    <?php echo $checked_tiki ?>>TIKI</label>
    <label class="radio"><input type="radio" name="kurir" value="POS"
    <?php echo $checked_pos ?>>POS</label>
  </p>
  <p >
    <label for="ongkir">Ongkos Kirim : </label>
    <input type="text" name="ongkir" id="ongkir"
    value="<?php echo $ongkir ?>">
  </p>
  <p>
    <label for="tgl" >Tanggal Dikirim : </label>
      <select name="tgl" id="tgl">
        <?php
          for ($i = 1; $i <= 31; $i++) {
            if ($i==$tgl){
              echo "<option value = $i selected>";
            }
            else {
              echo "<option value = $i >";
            }
            echo str_pad($i,2,"0",STR_PAD_LEFT);
            echo "</option>";
          }
        ?>
      </select>
        <select name="bln">
        <?php
        foreach ($arr_bln as $key => $value) {
          if ($key==$bln){
            echo "<option value=\"{$key}\" selected>{$value}</option>";
          }
          else {
            echo "<option value=\"{$key}\">{$value}</option>";
          }
        }
        ?>
      </select>
      <select name="thn">
        <?php
          for ($i = 2019; $i <= 2025; $i++) {
          if ($i==$thn){
              echo "<option value = $i selected>";
            }
            else {
              echo "<option value = $i >";
            }
            echo "$i </option>";
          }
        ?>
      </select>
  </p>
  <p>
    <label>Tambahan : </label>
    <input type="checkbox" name="dvd" value="DVD eBook" id="dvd"
    <?php echo $checked_dvd; ?>>
    <label for="dvd"> DVD eBook</label>
    <input type="checkbox" name="kado" value="Bungkus Kado" id="kado"
    <?php echo $checked_kado; ?>>
    <label for="kado"> Bungkus Kado</label>
  </p>
</fieldset>
  <br>
  <p>
    <input type="submit" name="submit" value="Pesan Buku">
  </p>
</form>

</div>

</body>
</html>
