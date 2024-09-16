<?php
  // hapus cookie
  setcookie("username",null,time()-60);
  setcookie("nama",null,time()-60);

  // redirect ke halaman index.php
  header("Location: index.php");
?>
