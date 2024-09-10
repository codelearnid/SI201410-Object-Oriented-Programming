<?php
function salam($waktu,...$siapa) {

  $nama = "";
  foreach ($siapa as $value) {
    $nama = "$nama $value, ";
  }

  return "Selamat $waktu $nama";
}

$a = ["siang","Andi","Rissa","Alex"];
echo salam(...$a);
