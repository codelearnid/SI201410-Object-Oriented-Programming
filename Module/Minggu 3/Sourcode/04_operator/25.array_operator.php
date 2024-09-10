<?php
  $kelasA = ["Andri","Joko","Sukma","Rina","Sari"];
  $kelasB = ["Alex","Rina","Rico"];

  $semua = $kelasA + $kelasB;
  print_r($semua); echo "<br>";
  // Array ( [0] => Andri [1] => Joko [2] => Sukma [3] => Rina [4] => Sari )

  var_dump($kelasA == $kelasB);  echo "<br>"; // false
  var_dump($kelasA === $kelasB); echo "<br>"; // false
  var_dump($kelasA != $kelasB);  echo "<br>"; // true
  var_dump($kelasA <> $kelasB);  echo "<br>"; // true
  var_dump($kelasA !== $kelasB);              // true
