<?php
function penambahan(...$array_argumen) {
   print_r($array_argumen);
}

echo penambahan(1,2);
echo "<br>";
echo penambahan(5,4,3,2,1);
echo "<br>";
echo penambahan(0,6,8,19);
