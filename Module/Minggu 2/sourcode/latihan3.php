<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kontak</title>
    <style>
        /* Gaya untuk mengatur tata letak dan tampilan halaman */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        
        /* Gaya untuk mengatur tampilan form */
        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        /* Gaya untuk input dan textarea */
        input, textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        /* Gaya untuk tombol submit */
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        /* Efek hover untuk tombol submit */
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        /* Gaya untuk label */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Form kontak dengan metode POST -->
    <form action="#" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" rows="4" required></textarea>
        
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
