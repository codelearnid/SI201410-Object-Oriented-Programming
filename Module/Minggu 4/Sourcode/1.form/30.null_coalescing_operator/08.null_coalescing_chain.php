<?php
  $prize = "Semua Buku Duniailkom";

  $kado = $_POST["kado"] ?? $prize ?? "";

  echo $kado;  // "Semua Buku Duniailkom"
