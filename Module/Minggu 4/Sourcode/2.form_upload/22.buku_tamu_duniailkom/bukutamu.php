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
      width: 450px;
      padding: 10px 80px 30px;
      background-color: white;
      margin: 20px auto;
      box-shadow: 1px 0px 10px, -1px 0px 10px ;
    }
    h1 {
      text-align: center;
      font-family: Cambria, "Times New Roman", serif;
    }
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
    img {
      width: 80%;
      display: block;
      margin: 0px auto;
      margin-bottom: 15px;
      box-shadow: 1px 0px 5px, -1px 0px 5px #FFF;
    }
  </style>
</head>
<body>

<div class="container">
<h1>Buku Tamu Duniailkom</h1>
<table>
<img src="<?php echo "folder_upload/$nama_file" ?>">
<tr>
  <td>Nama</td>
  <td><?php echo $nama; ?></td>
</tr>
<tr>
  <td>Email</td>
  <td><?php echo $email; ?></td>
</tr>
<tr>
  <td>Komentar</td>
  <td><?php echo $komentar; ?></td>
</tr>
</table>
</body>
</html>