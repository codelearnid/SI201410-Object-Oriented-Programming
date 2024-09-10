<?php
  $a = 99;
  $b = "Belajar PHP";
  $c =& $b;

  echo "$a , $b"; // 99 , Belajar PHP
  echo "<br />";
  echo "$a , $c"; // 99 , Belajar PHP
  echo "<br />";
  echo "$a , $b , $c"; // 99 , Belajar PHP , Belajar PHP
