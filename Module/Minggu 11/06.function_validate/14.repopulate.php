<?php
require 'Input.php';

$error = [];

if (!empty($_POST)) {

  function validate($item,$itemLabel,$rules) {
    $formValue = Input::get($item);

    // jalankan proses sanitize untuk setiap item (jika disyaratkan)
    if (array_key_exists('sanitize',$rules)) {
      $formValue = Input::runSanitize($formValue,$rules['sanitize']);
    }

    global $error;

    foreach ($rules as $rule => $ruleValue) {

      switch($rule) {

        case 'required':
          if ($ruleValue === TRUE && empty($formValue)) {
            $error[$item] = "$itemLabel tidak boleh kosong";
          }
        break;

        case 'min_char' :
          if (strlen($formValue) < $ruleValue) {
            $error[$item] = "$itemLabel minimal $ruleValue karakter";
          }
        break;

        case 'max_char' :
          if (strlen($formValue) > $ruleValue) {
            $error[$item] = "$itemLabel maksimal $ruleValue karakter";
          }
        break;

        case 'numeric' :
          if ($ruleValue === TRUE && !is_numeric($formValue)) {
            $error[$item] = "$itemLabel harus diisi angka";
          }
        break;

        case 'min_value' :
          if ($formValue < $ruleValue) {
            $error[$item] = "$itemLabel minimal $ruleValue";
          }
        break;

        case 'max_value' :
          if ($formValue > $ruleValue) {
            $error[$item] = "$itemLabel maksimal $ruleValue";
          }
        break;

      }

      // cek jika sudah ada error di item yang sama, langsung keluar dari looping
      if (!empty($error[$item])) {
        break;
      }

    }
    // kembalikan nilai yang sudah lewat proses sanitize
    return $formValue;
  }

  $nama_barang = validate('nama_barang','Nama barang', [
    'sanitize' => 'string',
    'required' => true,
    'min_char' => 5,
  ]);

  $jumlah_barang = validate('jumlah_barang','Jumlah barang', [
    'required' => true,
    'numeric' => true,
    'min_value' => 0,
    'max_value' => 110,
  ]);

  $harga_barang = validate('harga_barang','Harga barang', [
    'required' => true,
    'numeric' => true,
    'min_value' => 0,
  ]);

}

?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <title>Validation Class</title>
  </head>
  <style>
    .container {
      margin: 20px auto;
      width: 500px;
    }
    form > div {
      margin: 15px 0;
    }
    label {
      display:inline-block;
      width:100px;
    }
  </style>
  <body>
    <div class="container">
    <h2>Tambah Barang</h2>
    <div class="pesan-error">
      <ul>
        <?php
          foreach ($error as $value) {
            echo "<li>$value</li>";
          }
        ?>
      </ul>
    </div>
      <form method="post">
        <div>
          <label for="nama_barang">Nama Barang</label>
          <input type="text" name="nama_barang" value="<?php if (isset($nama_barang)) { echo $nama_barang; } ?>">
        </div>
        <div>
          <label for="jumlah_barang">Jumlah</label>
          <input type="text" name="jumlah_barang" value="<?php if (isset($jumlah_barang)) { echo $jumlah_barang; } ?>">
        </div>
        <div>
          <label for="harga_barang">Harga</label>
          <input type="text" name="harga_barang" value="<?php if (isset($harga_barang)) { echo $harga_barang; } ?>">
        </div>
        <div>
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </body>
</html>
