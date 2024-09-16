<?php
  $hasil = preg_match("/.+@.+\..+/", "test");
  echo $hasil."<br>";    // 0

  $hasil = preg_match("/.+@.+\..+/", "test@");
  echo $hasil."<br>";    // 0

  $hasil = preg_match("/.+@.+\..+/", "test@hehe");
  echo $hasil."<br>";    // 0

  $hasil = preg_match("/.+@.+\..+/", "@hehe.com");
  echo $hasil."<br>";    // 0

  $hasil = preg_match("/.+@.+\..+/", "a@a.a");
  echo $hasil."<br>";    // 1

  $hasil = preg_match("/.+@.+\..+/", "j0n1@d1sin1.bagus");
  echo $hasil."<br>";    // 1

  $hasil = preg_match("/.+@.+\..+/", "01@00.01");
  echo $hasil."<br>";    // 1  

  $hasil = preg_match("/.+@.+\..+/", "s@hehe.com.net.org");
  echo $hasil."<br>";    // 1
