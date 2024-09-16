<?php                   
  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, proses data
      
    // ambil nilai form
    if (isset($_POST["dvd"])) {
      $tambahan_dvd = "+ DVD eBook";
    } 
    else {
      $tambahan_dvd = "";
    }
    
    if (isset($_POST["kado"])) {
      $tambahan_kado = "+ Bungkus Kado";
    }
    else {
      $tambahan_kado = "";
    }    
   
    // siapkan variabel untuk menampung pesan error
    $pesan_error="";
    
    // validasi untuk test
    if (true) {
      $pesan_error .= "Maaf, ini hanya percobaan <br>";
    }
    
    // jika tidak ada error, tampilkan isi form
    if ($pesan_error === "") {
      echo "Form berhasil di proses <br>";
      echo "Tambahan : $tambahan_dvd $tambahan_kado <br>";
      die();
    }
  }
  else {
    $pesan_error = "";
  }
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
</head>
<body>
<h1>Pemrosesan Form</h1>
  <?php echo $pesan_error; ?>
  <form action="index.php" method="post">
  <p>
    <label>Tambahan : </label>
    <input type="checkbox" name="dvd" value="DVD eBook" id="dvd">
    <label for="dvd"> DVD eBook</label>    
    <input type="checkbox" name="kado" value="Bungkus Kado" id="kado"> 
    <label for="kado"> Bungkus Kado</label> 
  </p>
    <input type="submit" name="submit" value="Proses Data" >
  </form>
</body>
</html>