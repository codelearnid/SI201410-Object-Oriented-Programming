<?php
  $hasil = preg_match("/@/", "duniailkom@gmail.com");
  echo $hasil."<br>";    // 1

  $hasil = preg_match("/.+@.+/", "duniailkom@gmail.com");
  echo $hasil."<br>";    // 1

  $hasil = preg_match("/.+@.+\..+/", "duniailkom@gmail.com");
  echo $hasil."<br>";    // 1
