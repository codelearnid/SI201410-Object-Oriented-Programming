<?php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=ilkoom", "root", "");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query = "SELECT * FROM barang WHERE id_barang = ? OR
           nama_barang = ?";

  $stmt = $pdo->prepare($query);
  $stmt->bindValue(1, 5, PDO::PARAM_INT);
  $stmt->bindValue(2, "Printer Epson L220", PDO::PARAM_STR);
  $stmt->execute();

  while ($row = $stmt->fetch(PDO::FETCH_NUM)){
    echo $row[0]." | ".$row[1]. " | ".$row[2]. " | ".$row[3]. " | ".$row[4];
    echo "<br>";
  }
  $stmt = NULL;
}
catch (\PDOException $e) {
  echo "Koneksi / Query bermasalah: ".$e->getMessage(). " (".$e->getCode().")";
}
finally {
  $pdo=NULL;
}