<?php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=ilkoom", "root", "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query = "SELECT * FROM barang WHERE id_barang = ?";
  $stmt = $pdo->prepare($query);
  $stmt->execute([4]);

  $arr = $stmt->fetchAll(PDO::FETCH_NUM);
  echo "<pre>";
  print_r($arr);
  echo "</pre>";

  echo "<br>".$arr[2][1];

  $stmt = NULL;
}
catch (\PDOException $e) {
  echo "Koneksi / Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
}
finally {
  $pdo=NULL;
}