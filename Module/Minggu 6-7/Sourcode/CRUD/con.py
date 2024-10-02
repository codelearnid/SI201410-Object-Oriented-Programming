import mysql.connector
from mysql.connector import Error

# buat koneksi dengan database mysql
dbhost = "localhost"
dbuser = "root"
dbpass = ""
dbname = "kampusku"

try:
    koneksi = mysql.connector.connect(
        host=dbhost,
        user=dbuser,
        password=dbpass,
        database=dbname
    )
    
    # periksa koneksi, tampilkan pesan kesalahan jika gagal
    if not koneksi.is_connected():
        print("Gagal terhubung ke database")
    else:
        print("Berhasil terhubung ke database")

except Error as e:
    print(f"Koneksi dengan database gagal: {e}")

finally:
    if 'koneksi' in locals() and not koneksi.is_connected():
        print("Koneksi database sudah terputus")
    else:
        koneksi.close()
        print("Koneksi database ditutup")
