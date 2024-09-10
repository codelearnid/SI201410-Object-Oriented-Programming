<?php
  $hasil = (true and false);
  var_dump($hasil); echo "<br/>";    // bool(false)

  $hasil = (true or false);
  var_dump($hasil); echo "<br/>";    // bool(true)

  $hasil = (true xor false);
  var_dump($hasil); echo "<br/>";    // bool(true)

  $hasil = false;
  var_dump(!$hasil); echo "<br/>";   // bool(true)

  $hasil = (false or true && false);
  var_dump($hasil); echo "<br/>";    // bool(false)

  $hasil = ('duniailkom' and true);
  var_dump($hasil); echo "<br/>";    // bool(true) 

  $hasil = ('000' or false);
  var_dump($hasil);                  // bool(true)
