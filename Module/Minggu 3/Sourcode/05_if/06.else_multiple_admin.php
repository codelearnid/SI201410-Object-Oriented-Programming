<?php
  $user="guest";

  if ($user=="admin"){
    echo "Selamat datang Admin!";
  }
  else if ($user=="user"){
    echo "Selamat datang User";
  }
  else if ($user=="guest"){
    echo "Selamat datang Tamu";
  }
  else {
    echo "Maaf, saya tidak kenal anda";
  }
