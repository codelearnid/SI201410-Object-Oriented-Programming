<?php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=ilkoom", "root", "root");
  $query = "DELETE FROM barang WHERE id_barang = 3";
  $count = $pdo->exec($query);
  if ($count !== FALSE) {
    echo "Query Ok, ada $count baris yang di hapus";
  }
}
catch (\PDOException $e) {
  echo "Koneksi / Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
}
finally {
  $pdo=NULL;
}
