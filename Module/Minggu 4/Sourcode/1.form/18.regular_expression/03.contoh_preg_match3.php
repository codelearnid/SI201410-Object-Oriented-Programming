<?php
  $hasil = preg_match("/php/", "belajarphp");
  echo $hasil."<br>";    // 1

  $hasil = preg_match("/php/", "belajarhtml");
  echo $hasil."<br>";    // 0

  $hasil = preg_match("/php/", "belajar php");
  echo $hasil."<br>";    // 1

  $hasil = preg_match("/php/", "php itu asyik");
  echo $hasil."<br>";    // 1

  $hasil = preg_match("/php/", "sedang serius belajar");
  echo $hasil."<br>";    // 0

  $hasil = preg_match("/php/", "...ph...p");
  echo $hasil."<br>";    // 0

  $hasil = preg_match("/php/", "1234php1234");
  echo $hasil."<br>";    // 1
