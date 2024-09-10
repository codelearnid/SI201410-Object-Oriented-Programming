<?php
  $username = "admin";
  $password = "qwerty";

  if ($username=="admin" AND $password=="qwerty"){
      echo "Nama dan password sesuai, hak akses diberikan..";
  }
  else
  if ($username=="admin" AND $password!="qwerty"){
      echo "Nama sesuai, password tidak sesuai!";
    }
  else
  if ($username!="admin" AND $password=="qwerty"){
    echo "Nama tidak sesuai, password sesuai!";
  }
  else {
    echo "Nama dan password tidak sesuai!";
  }
