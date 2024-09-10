<?php
  $macam2 = array(121,"Joko",44.99,"Belajar PHP");
  $macam2[] = "Duniailkom";

  unset($macam2[0]);
  unset($macam2[2]);
  unset($macam2[3]);

  echo "<pre>";
  var_dump($macam2);
  echo "</pre>";
