<?php
  $a = 100;

  function test(){
   global $a;
   $a = 500;
   echo "$a <br>";
  }

  echo "$a <br>";
  test();
  echo "$a <br>";
