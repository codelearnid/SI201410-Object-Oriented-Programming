<?php
  $a=0b10110101;     // 10110101 biner = 181 desimal
  $b=0b01101100;     // 01101100 biner = 108 desimal

  $hasil = $a & $b;
  echo $hasil;       // 36 (desimal) = 00100100 biner
  echo "<br />";

  $hasil = $a | $b;
  echo $hasil;       // 253 (desimal) = 11111101 biner
  echo "<br />";

  $hasil = $a ^ $b;
  echo $hasil;       // 217 (desimal) = 11011001 biner
  echo "<br />";

  $hasil = ~$a;
  echo $hasil;       // -182 (desimal)
  echo "<br />";

  $hasil = $a >> 1;
  echo $hasil;       // 90 (desimal) = 1011010 biner
  echo "<br />";

  $hasil = $b << 2;
  echo $hasil;       // 432 (desimal) = 0110110000 biner
