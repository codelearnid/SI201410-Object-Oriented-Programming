<?php
  $_POST["kado"] = "a";

  if (isset($_POST["kado"])) {
    $checked_kado = "checked";
  }
  else {
    $checked_kado = "";
  }

  echo $checked_kado;  // "checked"
