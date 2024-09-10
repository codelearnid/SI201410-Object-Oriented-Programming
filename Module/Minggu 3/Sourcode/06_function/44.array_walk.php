<?php
$siswa = [
  "satu"  => "Andri",
  "dua"   => "Joko",
  "tiga"  => "Sukma",
  "empat" => "Rina"
];

function tampil($a,$b) {
  echo "Element ke $b berisi $a <br>";
}

array_walk($siswa, "tampil");
