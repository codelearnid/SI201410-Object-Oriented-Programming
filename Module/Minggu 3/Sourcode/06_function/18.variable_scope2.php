<?php
  $a = "variabel global";

  function test(){
   echo $a;
  }
  
  test(); // Notice: Undefined variable: a
