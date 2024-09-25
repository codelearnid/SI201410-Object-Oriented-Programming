<?php
  $_POST["kado"] = "Buku Codelearn";

  $kado = $_POST["kado"] ?? "";
  
  echo $kado;  // "Buku Codelearn"
