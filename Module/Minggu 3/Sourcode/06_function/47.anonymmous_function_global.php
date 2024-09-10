<?php
$a = 'Andi';

$salam = function () {
  global $a;
  echo "Selamat Siang $a";
};

$salam();   // Selamat Siang Andi
