<?php
  $_POST["kado"] = "Buku Duniailkom";
  
  if (isset($_POST["kado"])) {
    $kado = $_POST["kado"];
  }
  else {
    $kado = "";
  }
  
  echo $kado;  // "Buku Duniailkom"
