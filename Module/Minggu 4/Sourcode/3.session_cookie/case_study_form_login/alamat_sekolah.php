<?php
  // periksa apakah user sudah login, cek kehadiran cookie username 
  // jika tidak ada, redirect ke index.php
  if (!isset($_COOKIE["username"])) {
     header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
  <style>
    /* ====GLOBAL STYLE==== */
    body {
      background-color: #F8F8F8;
    }
    div.container {
      width: 530px;
      padding: 10px 50px 60px;
      background-color: white;
      margin: 20px auto;
      box-shadow: 1px 0px 10px, -1px 0px 10px ;
    }
    h1,h3 {
      text-align: center;
      font-family: Cambria, "Times New Roman", serif;
    }

    /* =====NAVIGATION===== */
    ul{
      padding: 0;
      margin: 20px 0;
      list-style: none;
      overflow: hidden;
    }
    nav li a {
      float: left;
      background-color: #E3E3E3;
      color: black;
      text-decoration: none;
      font-size: 20px;
      height: 30px;
      line-height: 30px;
      padding: 5px 20px;
    }
    nav li a:hover {
      background-color: #757575;
      color: white;
    }
    
    /* ======TABLE====== */
    table {
      border-collapse:collapse;
      border-spacing:0;
      border:1px black solid;
      width:100%
    }
    th, td {
      padding:8px 15px;
      border:1px black solid;
    }
    td:first-child {
      background-color: #F2F2F2;
    }
  </style>
</head>
<body>
<div class="container">
  <nav>
  <ul>
    <li><a href="data_siswa.php">Data Siswa</a></li>
    <li><a href="nilai_siswa.php">Nilai Siswa</a>
    <li><a href="alamat_sekolah.php">Alamat Sekolah</a></li>
    <li><a href="logout.php">Logout</a>
  </ul>
  </nav>
<h1>Selamat Datang, <?php echo $_COOKIE["nama"] ?></h1>
<h3>Alamat Sekolah SMA 1 Jambu Air</h3>
<address>Jl. Perintis Kemerdekaan No.46, Simpang Jambu Air, Desa Sukses Makmur</address>
</div>
</body>
</html>