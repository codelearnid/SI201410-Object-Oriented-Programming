<?php
  function salam($waktu="Malam", $nama="Anton"){
    echo "<p>Selamat $waktu, $nama </p>";
  }

  salam();                          // Selamat Malam, Anton
  salam("Pagi");                    // Selamat Pagi, Anton
  salam("Datang", "pak Presiden!"); // Selamat Datang, pak Presiden!
