#### Soal 1: Kelas dan Objek

1. Buatlah sebuah kelas bernama `Mobil` yang memiliki atribut `merek`, `model`, dan `tahun`.
2. Tambahkan constructor untuk menginisialisasi atribut-atribut tersebut.
3. Buatlah metode `info()` yang mengembalikan informasi tentang mobil dalam format: "Mobil: {merek} {model}, Tahun: {tahun}".
4. Buatlah objek dari kelas `Mobil` dan panggil metode `info()`.

#### Soal 2: Inheritance

1. Buatlah kelas `Kendaraan` dengan atribut `tipe` dan metode `info()`.
2. Buat kelas `Sepeda` yang mewarisi dari kelas `Kendaraan`, tambahkan atribut `jumlahRoda`.
3. Override metode `info()` di kelas `Sepeda` untuk mencetak informasi kendaraan dengan format: "Tipe: {tipe}, Jumlah Roda: {jumlahRoda}".
4. Buat objek dari kelas `Sepeda` dan panggil metode `info()`.

#### Soal 3: Constructor dan Destructor

1. Buatlah kelas `Pengguna` yang memiliki atribut `nama` dan `email`.
2. Tambahkan constructor untuk menginisialisasi atribut tersebut.
3. Tambahkan destructor yang mencetak pesan "Objek Pengguna {nama} dihapus".
4. Buat objek dari kelas `Pengguna` dan biarkan objek tersebut dihapus setelah penggunaan untuk memanggil destructor.

#### Soal 4: Property Overriding

1. Buatlah kelas `Produk` dengan atribut `nama` dan `harga`.
2. Buatlah kelas `Elektronik` yang mewarisi dari kelas `Produk` dan override properti `harga` di kelas `Elektronik` dengan nilai diskon.
3. Tambahkan metode `info()` di kedua kelas untuk menampilkan informasi produk.
4. Buat objek dari kelas `Elektronik` dan tampilkan informasi produk.

#### Soal 5: Method Argument

1. Modifikasi kelas `Mobil` dari Soal 1 untuk menambahkan metode `ubahTahun($tahunBaru)` yang mengubah tahun mobil.
2. Buat objek dari kelas `Mobil`, ubah tahun mobil menggunakan metode yang telah dibuat, dan tampilkan informasi mobil setelah diubah.

#### Soal 6: Penerapan Interface

1. Buatlah interface `Transportasi` dengan metode `berangkat()` dan `tiba()`.
2. Buat kelas `Bus` yang mengimplementasikan interface `Transportasi`.
3. Implementasikan metode `berangkat()` dan `tiba()` untuk mencetak pesan yang sesuai.
4. Buat objek dari kelas `Bus` dan panggil kedua metode.
