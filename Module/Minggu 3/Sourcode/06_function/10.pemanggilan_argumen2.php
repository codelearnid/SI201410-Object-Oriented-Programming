<?php
  function salam($waktu,$nama){
    echo "<p>Selamat $waktu, $nama </p>";
  }

  $event = "Belajar PHP";
  $user = "Andi";

  salam($event, $user); // Selamat Belajar PHP, Andi
