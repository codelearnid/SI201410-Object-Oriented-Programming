<?php
function salam($waktu,...$siapa) {

  $nama = "";
  foreach ($siapa as $value) {
    $nama = "$nama $value, ";
  }

  return "Selamat $waktu $nama";
}

echo salam("siang", "Andi","Rissa","Alex");
