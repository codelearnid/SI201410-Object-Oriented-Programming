<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Belajar PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 0 auto;
    }
    div {
      width: 600px; /* Lebar div diperbesar untuk memberikan ruang yang lebih luas */
      margin: auto;
      text-align: left;
    }
    h1 {
      margin: 20px 0;
    }
    fieldset {
      margin-top: 10px;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    legend {
      font-weight: bold;
      color: #333;
    }
    p {
      margin: 10px 0;
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"], input[type="password"], select, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="checkbox"] {
      margin: 10px 0 10px 20px;
    }
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div>
<h1>Form Registrasi</h1>

<form action="proses.php" method="post">
<fieldset>
<legend>Biodata</legend>
  <p>
    <label for="nama">Nama : </label>
    <input type="text" name="nama" id="nama">
  </p>
  <p>
    <label for="nim">NIM : </label>
    <input type="text" name="nim" id="nim">
  </p>
  <p>
    <label for="tgl" >Tanggal Lahir : </label>
    <select name="tgl" id="tgl" style="width: 30%; display: inline-block; margin-right: 10px;">
        <?php
          for ($i = 1; $i <= 31; $i++) {
            echo "<option value = $i >";
            echo str_pad($i,2,"0",STR_PAD_LEFT);
            echo "</option>";
          }
        ?>
      </select>
      <select name="bln" style="width: 30%; display: inline-block; margin-right: 10px;">
        <option value=1>Januari</option>
        <option value=2>Februari</option>
        <option value=3>Maret</option>
        <option value=4>April</option>
        <option value=5>Mei</option>
        <option value=6>Juni</option>
        <option value=7>Juli</option>
        <option value=8>Agustus</option>
        <option value=9>September</option>
        <option value=10>Oktober</option>
        <option value=11>Nopember</option>
        <option value=12>Desember</option>
      </select>
      <select name="thn" style="width: 30%; display: inline-block;">
        <?php
          for ($i = 1980; $i <= 2016; $i++) {
            echo "<option value = $i > $i </option>";
          }
        ?>
      </select>
  </p>
  <p>
    <label for="alamat">Alamat </label>
    <textarea name="alamat" id="alamat" cols="25"></textarea>
  </p>
  <p>
    <label>Jenis kelamin</label>
    <label><input type="radio" name="kel" value="laki2">
    Laki-laki</label>
    <label><input type="radio" name="kel" value="perempuan">
    Perempuan</label>
  </p>
</fieldset>

<fieldset>
<legend align="">User Account</legend>
  <p>
    <label for="username">Username</label>
    <input type="text" name="username" id="username"/>
  </p>
  <p>
    <label for="email">Email </label>
    <input type="text" name="email" id="email" />
  </p>
  <p>
    <label for="pass">Password</label>
    <input type="password" name="password" id="pass" />
  </p>
  <p>
    <label for="repass">Ulangi Password</label>
    <input type="password" name="repassword" id="repass" />
  </p>
</fieldset>

<fieldset>
<legend>Resolusi Tahun Ini</legend>
  <p>
    <input type="checkbox" name="target1" value="HTML" id="html">
    <label for="html"> Menguasai HTML</label>
  </p>
  <p>
    <input type="checkbox" name="target2" value="CSS" id="css">
    <label for="css"> Paham CSS</label>
  </p>
  <p>
    <input type="checkbox" name="target3" value="PHP" id="php">
    <label for="php"> Mastering PHP</label>
  </p>
</fieldset>
  <br>
  <p>
    <input type="submit" value="Kirim Data">
  </p>
</form>

</div>

</body>
</html>
