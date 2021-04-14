## Praktikum 04
### Kegiatan 1
5. a) _function_ ``fopen()`` berfungsi untuk membuka file, dengan parameter pertama adalah _path_ atau alamat file atau _URL_ dan parameter kedua tipe akses file.
   b) _function_ ``die()`` berfungsi untuk menampilkan pesan dan kemudian mengakhiri program.
   c) _function_ ``fread()`` berfungsi untuk membaca file dari hasil membuka file, dengan parameter pertama adalah variabel hasil membuka file atau ``fopen()`` dan parameter kedua adalah panjang data yang ingin dibaca.
   d) _function_ ``fclose()`` berfungsi untuk menutup hasil membuka file atau hasil ``fopen()``. Saat tidak menggunakan _function_ ini, maka akan gagal ketika menggunakan ``fopen()`` karena ada batasan dan juga akan menghabiskan banyak memori/RAM.
 
### Kegiatan 2
2. Hasil keluarannya sama. Perbedaannya letak algoritma pembacaan file dan _function_ yang digunakan. Jika yang pertama membaca file dari awal hingga akhir dalam 1 _function_, sedangkan yang ini membaca file baris per baris hingga habis.
3. a) _function_ ``feof()`` berfungsi untuk mengecek apakah variabel hasil ``fopen()`` sudah mencapai akhir file tidak.
   b) _function_ fgets`` berfungsi untuk membaca file secara perbaris.
    
### Kegiatan 3
3. _function_ ``fwrite()`` berfungsi untuk menulis data ke dalam  hasil buka file atau ``fopen()``.
4. Mode akses "a" akan meletak pointer pada akhir file,  sedangkan mode akses "w" akan meletakkan pointer pada awal file.