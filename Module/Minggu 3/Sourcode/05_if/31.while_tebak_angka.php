<?php
  $salah = TRUE;
  $tebak_angka = 8;

  while ($salah) {
    if ($tebak_angka==8) {
      $salah = FALSE;
      echo "Anda benar! <br>";
    }
    else {
      echo "Jawaban anda salah, silahkan ulangi kembali <br>";
    }
  }
