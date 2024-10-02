<?php

  // ambil pesan jika ada
  if (isset($_GET["pesan"])) {
      $pesan = $_GET["pesan"];
  }

  // cek apakah form telah di submit
  if (isset($_POST["submit"])) {
    // form telah disubmit, proses data

    // ambil nilai form
    $username = htmlentities(strip_tags(trim($_POST["username"])));
    $password = htmlentities(strip_tags(trim($_POST["password"])));

    // siapkan variabel untuk menampung pesan error
    $pesan_error="";

    // cek apakah "username" sudah diisi atau tidak
    if (empty($username)) {
      $pesan_error .= "Username belum diisi <br>";
    }

    // cek apakah "password" sudah diisi atau tidak
    if (empty($password)) {
      $pesan_error .= "Password belum diisi <br>";
    }

    // buat koneksi ke mysql dari file connection.php
    include("connection.php");

    // filter dengan mysqli_real_escape_string
    $username = mysqli_real_escape_string($link,$username);
    $password = mysqli_real_escape_string($link,$password);

    // generate hashing
    $password_sha1 = sha1($password);

    // cek apakah username dan password ada di tabel admin
    $query = "SELECT * FROM admin WHERE username = '$username'
              AND password = '$password_sha1'";
    $result = mysqli_query($link,$query);

    if(mysqli_num_rows($result) == 0 )  {
      // data tidak ditemukan, buat pesan error
      $pesan_error .= "Username dan/atau Password tidak sesuai";
    }

      // bebaskan memory
      mysqli_free_result($result);

      // tutup koneksi dengan database MySQL
      mysqli_close($link);

    // jika lolos validasi, set session
    if ($pesan_error === "") {
      session_start();
      $_SESSION["nama"] = $username;
      header("Location: tampil_mahasiswa.php");
    }
  }
  else {
    // form belum disubmit atau halaman ini tampil untuk pertama kali
    // berikan nilai awal untuk semua isian form
    $pesan_error = "";
    $username = "";
    $password = "";
  }

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Sistem Informasi Mahasiswa</title>
  <link rel="icon" href="favicon.png" type="image/png" >
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
      width: 215px;
      margin: auto;
    }
    input {
      margin-bottom:10px;
    }
    input[type=text],input[type=password] {
      width:120px;
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
<h3>Sistem Informasi Kampusku</h3>
<?php
  // tampilkan pesan jika ada
  if (isset($pesan)) {
      echo "<div class=\"pesan\">$pesan</div>";
  }

  // tampilkan error jika ada
  if ($pesan_error !== "") {
      echo "<div class=\"error\">$pesan_error</div>";
  }
?>
<form action="login.php" method="post">
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
    value="<?php echo $username ?>">
  </p>
    <p>
    <input type="submit" name="submit" value="Log In">
  </p>
</fieldset>
</form>
</div>
</body>
</html>
