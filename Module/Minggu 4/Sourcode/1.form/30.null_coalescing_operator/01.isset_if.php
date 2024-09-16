<?php
  if (isset($_POST["kado"])) {
    $checked_kado = "checked";
  }
  else {
    $checked_kado = "";
  }

  echo $checked_kado;  // ""
