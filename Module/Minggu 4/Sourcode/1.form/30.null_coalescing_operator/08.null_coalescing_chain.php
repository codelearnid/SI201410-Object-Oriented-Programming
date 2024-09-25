<?php
  $prize = "Semua Buku Codelearn";

  $kado = $_POST["kado"] ?? $prize ?? "";

  echo $kado;  // "Semua Buku Codelearn"
