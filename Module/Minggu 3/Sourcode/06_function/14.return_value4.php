<?php
  function tambah($satu,$dua){
    $hasil = $satu + $dua;
    return $hasil;
  }

  echo tambah(5,7);
  echo "<br>";

  echo "Hasil dari 6 + 9 adalah: ". tambah(6,9);
  echo "<br>";

  echo tambah(99,1).", Bisa didapat dari 99 + 1";
