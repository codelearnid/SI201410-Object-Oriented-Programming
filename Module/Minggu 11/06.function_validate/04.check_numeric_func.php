<?php
require 'Input.php';

$error = [];

if (!empty($_POST)) {

  function check_required($item, $itemLabel){
    $formValue = Input::get($item);

    global $error;
    if (empty($formValue)) {
      $error[] = "$itemLabel tidak boleh kosong";
    }
  }

  function check_min_char($item, $itemLabel, $ruleValue){
    $formValue = Input::get($item);

    global $error;
    if (strlen($formValue) < $ruleValue) {
      $error[] = "$itemLabel minimal $ruleValue karakter";
    }
  }

  function check_numeric($item, $itemLabel){
    $formValue = Input::get($item);

    global $error;
    if (!is_numeric($formValue)) {
      $error[] = "$itemLabel harus diisi angka";
    }
  }

  check_required('nama_barang','Nama barang');
  check_required('jumlah_barang','Jumlah barang');
  check_required('harga_barang','Harga barang');

  check_min_char('nama_barang','Nama barang',5);

  check_numeric('jumlah_barang','Jumlah barang');
  check_numeric('harga_barang','Harga barang');
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
          <input type="text" name="nama_barang" value="<?php echo Input::get('nama_barang') ?>">
        </div>
        <div>
          <label for="jumlah_barang">Jumlah</label>
          <input type="text" name="jumlah_barang" value="<?php echo Input::get('jumlah_barang') ?>">
        </div>
        <div>
          <label for="harga_barang">Harga</label>
          <input type="text" name="harga_barang" value="<?php echo Input::get('harga_barang') ?>">
        </div>
        <div>
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </body>
</html>
