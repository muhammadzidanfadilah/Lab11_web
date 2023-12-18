
# Pertemuan 12

<table>
  <tr>
    <td>Nama</td>
    <td>Muhammad Zidan Fadillah</td>
  </tr>
  <tr>
    <td>NIM</td>
    <td>312210277</td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>TI 22 A2</td>
  </tr>
  <tr>
    <td>Matkul</td>
    <td>Pemrograman Web</td>
  </tr>
</table>

<b>Langkah-langkah Praktikum:</b>

1.	Membuat folder lab11_php_ci

![lola1](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/67a03234-c831-4194-aa4f-d0385f15bb27)

 
2.	Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi
pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan
pengembangan Codeigniter 4.
Berikut beberapa ekstensi yang perlu diaktifkan:
• php-json ekstension untuk bekerja dengan JSON;
• php-mysqlnd native driver untuk MySQL;
• php-xml ekstension untuk bekerja dengan XML;
• php-intl ekstensi untuk membuat aplikasi multibahasa;
• libcurl (opsional), jika ingin pakai Curl.
Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian
Apache klik Config -> PHP.ini
 
![image](https://user-images.githubusercontent.com/101716699/173289689-ed7a62c5-d332-4614-b4ad-5eb5d8d16fb1.png)


Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan
diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

![image](https://user-images.githubusercontent.com/101716699/173289847-98db785c-b873-4aeb-a456-1b422a97d552.png)


