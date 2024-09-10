<?php
  function tambah($satu,$dua){
    $hasil = $satu + $dua;
    return $hasil;
    echo "Kalimat ini tidak akan pernah dijalankan...";
  }

  echo tambah(5,7); // 12
