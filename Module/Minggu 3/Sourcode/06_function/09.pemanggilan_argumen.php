<?php
  function salam($waktu,$nama){
    echo "<p>Selamat $waktu, $nama </p>";
  }

  salam("Pagi",null);   // Selamat Pagi,
  salam("","Joko");     // Selamat , Joko 
