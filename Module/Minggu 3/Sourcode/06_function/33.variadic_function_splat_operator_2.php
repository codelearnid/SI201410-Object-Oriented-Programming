<?php
function penambahan(...$array_argumen) {
  
  $hasil = 0;
  foreach ($array_argumen as $value) {
    $hasil = $hasil + $value;
  }

  return $hasil;
}

echo penambahan(1,2);
echo "<br>";
echo penambahan(5,4,3,2,1);
echo "<br>";
echo penambahan(0,6,8,19);
