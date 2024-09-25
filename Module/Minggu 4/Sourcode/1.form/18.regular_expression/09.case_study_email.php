<?php
  $hasil = preg_match("/@/", "codelearn@gmail.com");
  echo $hasil."<br>";    // 1

  $hasil = preg_match("/.+@.+/", "codelearn@gmail.com");
  echo $hasil."<br>";    // 1

  $hasil = preg_match("/.+@.+\..+/", "codelearn@gmail.com");
  echo $hasil."<br>";    // 1
