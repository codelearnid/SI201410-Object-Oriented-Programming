<?php
function penambahan() {
   $array_argumen = func_get_args();
   $jumlah_argumen = func_num_args();
   $nilai_argumen_ke_2 = func_get_arg(1); //index dimulai dari 0

   echo "Array Argumen: ";
   print_r($array_argumen);
   echo "<br>";

   echo "Jumlah argumen: $jumlah_argumen <br>";
   echo "Nilai argumen ke-2: $nilai_argumen_ke_2 <br>";
}

penambahan(1,2);
echo "<br>";
penambahan(5,4,3,2,1);
echo "<br>";
penambahan(0,6,8,19);
