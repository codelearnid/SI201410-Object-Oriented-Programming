<?php
if (!empty($_POST)) {

    echo $_POST['nama_barang']. "<br>";

  if (isset ($_POST['jumlah_barang'])) {
    echo $_POST['jumlah_barang']. "<br>";
  }
  if (isset ($_POST['harga_barang'])) {
    echo $_POST['harga_barang']. "<br>";
  }
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
    </div>
      <form method="post">
        <div>
          <label for="nama_barang">Nama Barang</label>
          <input type="text" name="nama_barang">
        </div>
        <div>
          <label for="jumlah_barang">Jumlah</label>
          <input type="text" name="jumlah_barang">
        </div>
        <div>
          <label for="harga_barang">Harga</label>
          <input type="text" name="harga_barang">
        </div>
        <div>
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </body>
</html>
