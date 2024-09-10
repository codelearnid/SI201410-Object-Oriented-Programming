<?php
$a = 'Andi';

$salam = function () use ($a) {
  echo "Selamat Siang $a <br>";
  $a = 'Rissa';
  echo "Selamat Siang $a <br>";
};

$salam();
echo "Selamat Siang $a ";
