<!DOCTYPE html>
<!-- Deklarasi dokumen HTML -->
<html lang="id">
<!-- Mendefinisikan bahasa dokumen -->
<head>
  <meta charset="UTF-8">
  <!-- Mengatur karakter encoding -->
  <title>Belajar PHP</title>
  <!-- Judul halaman -->
  <style>
  /* Mengatur gaya untuk body */
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }
  /* Mengatur gaya untuk form */
  form {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  /* Mengatur gaya untuk input text dan password */
  input[type="text"],
  input[type="password"] {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-left: 10px; /* Menambahkan spasi kiri untuk input text dan password */
  }
  /* Mengatur gaya untuk tombol submit */
  input[type="submit"] {
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    background-color: #007bff;
    color: white;
    cursor: pointer;
  }
</style>
</head>
<body>
  <form action="proses.php" method="post">
    <!-- Mengarahkan form ke halaman proses.php dengan metode POST -->
    <p>Nama: <input type="text" name="nama"></p>
    <!-- Input untuk nama -->
    <p>Password: <input type="password" name="password"></p>
    <!-- Input untuk password -->
    <input type="submit" value="Proses Data" >
    <!-- Tombol untuk mengirim form -->
  </form>
</body>

</html>