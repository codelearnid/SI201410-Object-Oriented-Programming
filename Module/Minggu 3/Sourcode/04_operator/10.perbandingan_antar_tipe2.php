<?php
  var_dump(10 == '10');       echo "<br />";  // bool(true)
  var_dump(10 === '10');      echo "<br />";  // bool(false)
  var_dump('Andi' == 0);      echo "<br />";  // bool(true)
  var_dump('10 ayam' == 10);  echo "<br />";  // bool(true)
  var_dump('10 ayam' === 10); echo "<br />";  // bool(false)
  var_dump(true < false);     echo "<br />";  // bool(false)

  $siswa1 = array("anto","andri");
  $siswa2 = array("anto","andri");
  var_dump($siswa1 == $siswa2); // bool(true)
