<?php
$siswa = [
  "satu"  => "Andri",
  "dua"   => "Joko",
  "tiga"  => "Sukma",
  "empat" => "Rina"
];

array_walk($siswa, function ($a,$b) {
  echo "Element ke $b berisi $a <br>";
});
