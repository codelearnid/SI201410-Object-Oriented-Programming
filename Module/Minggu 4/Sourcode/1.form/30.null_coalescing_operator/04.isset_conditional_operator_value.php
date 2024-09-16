<?php
  $_POST["kado"] = "Buku Codelearn";
  
  $kado = isset($_POST["kado"]) ? $_POST["kado"] : "";
  
  echo $kado;  // "Buku Codelearn"
