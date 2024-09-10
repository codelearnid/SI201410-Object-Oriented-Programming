<?php
  for ($i=0; $i <10; $i++) {
    for ($j=0; $j <10; $j++) {
      if ($i==4) {
        break 2;
      }
      echo $i;
    }
  echo "<br>";
  }
