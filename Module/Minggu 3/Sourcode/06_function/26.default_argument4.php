<?php
  function salam($waktu, $nama="Anton"){
    echo "<p>Selamat $waktu, $nama </p>";
  }

  salam("Sore");              // Selamat Sore, Anton
  salam("Pagi");              // Selamat Pagi, Anton
  salam("Datang", "Randy");   // Selamat Datang, Randy
  salam();                    // Warning: Missing argument 1 for salam()
