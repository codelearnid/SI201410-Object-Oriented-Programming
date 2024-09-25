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
    p {
      margin:0;
    }
    fieldset {
      padding:20px;
    }
    input, textarea {
      margin-bottom:10px;
    }
    label {
      width:110px;
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
<h1>Buku Tamu Codelearn</h1>
<form action="index.php" method="post" enctype="multipart/form-data" >
<fieldset>
<legend>Buku Tamu</legend>
  <p>
    <label for="nama">Nama : </label> 
    <input type="text" name="nama" id="nama">
  </p>
  <p>
    <label for="email">Email : </label> 
    <input type="text" name="email" id="email" >
  </p>
  <p>
    <label for="komentar">Komentar: </label> 
    <textarea name="komentar" cols="25" name="komentar"></textarea>
  </p>
  <p>
    <label for="file_upload">Display Picture: </label> 
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <input type="file" name="file_upload" id="file_upload" accept="image/*">
  </p>        
</fieldset>
  <br>
  <p>
    <input type="submit" name="submit" value="Posting Komentar">
  </p>
</form> 

</div>
</body>
</html>