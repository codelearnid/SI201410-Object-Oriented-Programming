<?php
  $_POST["kado"] = "Buku Codelearn";
  
  if (isset($_POST["kado"])) {
    $kado = $_POST["kado"];
  }
  else {
    $kado = "";
  }
  
  echo $kado;  // "Buku Codelearn"
