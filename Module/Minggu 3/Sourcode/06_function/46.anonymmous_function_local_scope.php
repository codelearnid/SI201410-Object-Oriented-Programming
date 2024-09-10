<?php
$a = 'Andi';

$salam = function () {
  echo "Selamat Siang $a";
};

$salam();   // Notice: Undefined variable: a
