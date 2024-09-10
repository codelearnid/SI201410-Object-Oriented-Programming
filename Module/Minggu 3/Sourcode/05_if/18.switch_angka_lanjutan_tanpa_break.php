<?php
  $a = 3;
  switch ($a) {
    case 0 :
    case 1 :
    case 2 :
    case 3 : echo "Angka berada di dalam range 0-3"; break;
    case 4 :
    case 5 :
    case 6 :
    case 7 : echo "Angka berada di dalam range 4-7"; break;
    default : echo "Angka diluar jangkauan";         break;
  }
