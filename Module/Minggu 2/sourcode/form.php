<!DOCTYPE html> <!-- Deklarasi tipe dokumen HTML5 -->
<html lang="id"> <!-- Tag pembuka HTML dengan atribut bahasa Indonesia -->
<head> <!-- Bagian kepala dokumen -->
    <meta charset="UTF-8"> <!-- Pengaturan karakter encoding UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Pengaturan viewport untuk responsivitas -->
    <title>Formulir HTML</title> <!-- Judul halaman yang akan ditampilkan di tab browser -->
    <!-- <link rel="stylesheet" href="styles.css"> Link ke file CSS eksternal -->
</head>
    <style> <!-- Bagian CSS internal -->
        /* Mengatur tata letak dan gaya umum halaman */
        body {
            display: flex; /* Menggunakan flexbox untuk penataan */
            justify-content: center; /* Memusatkan konten secara horizontal */
            align-items: center; /* Memusatkan konten secara vertikal */
            height: 100vh; /* Mengatur tinggi body menjadi 100% viewport height */
            margin: 0; /* Menghilangkan margin default */
            font-family: Arial, sans-serif; /* Mengatur font default */
        }

        /* Mengatur gaya dan ukuran form */
        form {
            width: 300px; /* Mengatur lebar form */
            padding: 20px; /* Menambahkan ruang dalam form */
            border: 1px solid #ccc; /* Menambahkan garis tepi pada form */
            border-radius: 5px; /* Membuat sudut form melengkung */
            background-color: #f9f9f9; /* Memberikan warna latar pada form */
        }

        /* Mengatur gaya input dan textarea */
        input, textarea {
            width: 100%; /* Mengatur lebar input dan textarea menjadi 100% */
            margin-bottom: 10px; /* Menambahkan jarak antar elemen */
            padding: 8px; /* Menambahkan ruang dalam elemen */
            border: 1px solid #ccc; /* Menambahkan garis tepi pada input dan textarea */
            border-radius: 4px; /* Membuat sudut input dan textarea melengkung */
            box-sizing: border-box; /* Menghindari elemen meluap dari kontainer */
        }

        /* Mengatur gaya tombol submit */
        input[type="submit"] {
            background-color: #4CAF50; /* Warna latar tombol submit */
            color: white; /* Warna teks tombol submit */
            border: none; /* Menghilangkan garis tepi */
            padding: 10px 15px; /* Menambahkan padding pada tombol */
            border-radius: 4px; /* Membuat sudut tombol melengkung */
            cursor: pointer; /* Mengubah kursor saat hover */
        }

        /* Mengatur gaya tombol submit saat hover */
        input[type="submit"]:hover {
            background-color: #45a049; /* Mengubah warna latar saat hover */
        }
    </style>
</head>
<body> <!-- Bagian badan dokumen -->
    <!-- Form HTML dengan styling center -->
    <form action="#" method="post"> <!-- Tag pembuka form dengan atribut action dan method -->
        <!-- Nama pengguna -->
        <label for="nama">Nama:</label> <!-- Label untuk input nama -->
        <input type="text" id="nama" name="nama" required> <!-- Input teks untuk nama -->

        <!-- Alamat email -->
        <label for="email">Email:</label> <!-- Label untuk input email -->
        <input type="email" id="email" name="email" required> <!-- Input email -->

        <!-- Pesan -->
        <label for="pesan">Pesan:</label> <!-- Label untuk textarea pesan -->
        <textarea id="pesan" name="pesan" rows="4" required></textarea> <!-- Textarea untuk pesan -->

        <!-- Tombol submit -->
        <input type="submit" value="Kirim"> <!-- Tombol submit form -->
    </form>
</body>
</html>
