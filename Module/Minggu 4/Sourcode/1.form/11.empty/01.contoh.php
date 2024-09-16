<?php
  // string kosong
  $test="";
  var_dump(empty($test)); echo "<br>";    // bool(true)

  // integer 0
  $test=0;
  var_dump(empty($test)); echo "<br>";    // bool(true)

  // float 0.0
  $test="0.0";
  var_dump(empty($test)); echo "<br>";    // bool(true)

  // string "0"
  $test="0";
  var_dump(empty($test)); echo "<br>";    // bool(true)

  // NULL
  $test=NULL;
  var_dump(empty($test)); echo "<br>";    // bool(true)

  // boolean FALSE
  $test="FALSE";
  var_dump(empty($test)); echo "<br>";    // bool(true)

  // array kosong
  $test=array();
  var_dump(empty($test)); echo "<br>";    // bool(true)

  // variabel yang belum berisi nilai
  $test;
  var_dump(empty($test));                 // bool(true)
