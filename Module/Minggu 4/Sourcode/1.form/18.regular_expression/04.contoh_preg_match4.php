<?php
  $hasil = preg_match("/^php/", "belajarphp");
  echo $hasil."<br>";    // 0

  $hasil = preg_match("/^php/", "belajar php");
  echo $hasil."<br>";    // 0

  $hasil = preg_match("/^php/", "php itu asyik");
  echo $hasil."<br>";    // 1

  $hasil = preg_match("/^php/", "aaaaphpaaa");
  echo $hasil."<br>";    // 0

  $hasil = preg_match("/^php/", "ph..p");
  echo $hasil."<br>";    // 0
  
  $hasil = preg_match("/^php/", "phpaaaa");
  echo $hasil."<br>";    // 1
