<?php
  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, proses data

    // ambil nilai form
    $username = htmlentities(strip_tags(trim($_POST["username"])));
    $password = htmlentities(strip_tags(trim($_POST["password"])));

    // siapkan variabel untuk menampung pesan error
    $pesan_error = "";

    // cek apakah "username" sudah diisi atau tidak
    if (empty($username)) {
      $pesan_error .= "Username belum diisi <br>";
    }

    // cek apakah "password" sudah diisi atau tidak
    if (empty($password)) {
      $pesan_error .= "Password belum diisi <br>";
    }
    // username harus "admin" dan password adalah "rahasia"
    if ($username!= "admin" OR $password!="rahasia") {
      $pesan_error .= "Username dan/atau Password tidak sesuai";
    }

    // jika lolos validasi, set cookie
    if ($pesan_error === "") {
      setcookie("username","admin");
      setcookie("nama","Andika");
      header("Location: data_siswa.php");
    }
  }
  else {
    // form belum disubmit atau halaman ini tampil untuk pertama kali
    // berikan nilai awal untuk semua isian form
    $pesan_error = "";
    $username    = "";
    $password    = "";
  }

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
  <style>
    body {
      background-color: #F8F8F8;
    }
    div.container {
      width: 380px;
      padding: 10px 50px 80px;
      background-color: white;
      margin: 20px auto;
      box-shadow: 1px 0px 10px, -1px 0px 10px ;
    }
    h1,h3 {
      text-align: center;
      font-family: Cambria, "Times New Roman", serif;
    }
    p {
      margin:0;
    }
    fieldset {
      padding:20px;
      width: 240px;
      margin: auto;
    }
    input {
      margin-bottom:10px;
    }
    input[type=submit] {
      float:right;
    }
    label {
      width:80px;
      float:left;
      margin-right:10px;
    }
    .error {
      background-color: #FFECEC;
      padding: 10px 15px;
      margin: 0 0 20px 0;
      border: 1px solid red;
      box-shadow: 1px 0px 3px red ;
    }
  </style>
</head>
<body>
<div class="container">
<h1>Selamat Datang</h1>
<h3>Website Sekolah SMA 1 Jambu Air</h3>
<?php
  // tampilkan error jika ada
  if ($pesan_error !== "") {
      echo "<div class=\"error\">$pesan_error</div>";
  }
?>
<form action="index.php" method="post">
<fieldset>
<legend>Login</legend>
  <p>
    <label for="username">Username : </label>
    <input type="text" name="username" id="username"
    value="<?php echo $username ?>">
  </p>
  <p>
    <label for="password">Password : </label>
    <input type="password" name="password" id="password"
    value="<?php echo $password ?>">
  </p>
    <p>
    <input type="submit" name="submit" value="Log In">
  </p>
</fieldset>
</form>
</div>
</body>
</html>
