
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

3.	Instalasi Codeigniter 4
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara
manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara
manual.
•	Unduh Codeigniter dari website https://codeigniter.com/download 
•	Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.
•	Ubah nama direktory framework-4.x.xx menjadi ci4.
•	Buka browser dengan alamat http://localhost/lab11_ci/ci4/public/

![lolo](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/98861e22-2c04-48af-98c8-cedf14631461)


5.	Menjalankan CLI (Command Line Interface)
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt. Kemudian arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/htdocs/lab11_ci/ci4/)
 
![image](https://user-images.githubusercontent.com/101716699/172665124-3cebdc57-cb4a-412f-a1a4-eff50211e60f.png)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah:
 
![image](https://user-images.githubusercontent.com/101716699/172665173-9db9ae0e-1981-4f23-9345-6884f4fed844.png)

5.	Mengaktifkan Mode Debugging
Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk
mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.
Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan
pesan kesalahan seperti berikut.

![lola2](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/51ebe32b-934d-4892-9722-bb8c56637dd1)


Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis
errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi
pada environment variable CI_ENVIRINMENT menjadi development.
Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable
CI_ENVIRINMENT menjadi development.
 
![image](https://user-images.githubusercontent.com/101716699/172665358-20b10dea-4e15-41eb-b41f-2d846e320972.png)

6.	Contoh eror
Untuk mencoba error tersebut, ubah kode pada file
app/Controller/Home.php hilangkan titik koma pada akhir kode.
 
![image](https://user-images.githubusercontent.com/101716699/172665419-ec7668c7-7a05-4ce0-966b-0802cd2a8123.png)

![lola3](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/7424b2c8-f343-4dd3-8edd-bee97b0db136)


7.	Membuat route baru dalam Routes.php
Tambahkan kode berikut ini pada Routes.php
 
![image](https://user-images.githubusercontent.com/101716699/172666159-73729cf5-6d64-40b2-bfae-d22f1c05d06b.png)
![image](https://user-images.githubusercontent.com/101716699/172666177-5f8eca03-c057-4101-a11f-cd405ab0bcff.png)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about seperti berikut. Maka hasilnya akan terjadi error, yang artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

![lola4](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/aaa7e6df-3d2e-4e14-a33e-be9ba363eee6)


8.	Membuat Controller
Kemudian membuat Controller Page. Buat file baru dengan nama page.php
pada direktori Controller kemudian isi kodenya seperti berikut.

![image](https://user-images.githubusercontent.com/101716699/172666390-60ee11f5-02c8-4bf4-8ce9-1b5860813cc0.png)

Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman
sudah dapat diakses.

![image](https://user-images.githubusercontent.com/101716699/173297298-52ccd65a-6799-4b84-a200-c55a89977bf7.png)

9.	Auto Routing
Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status
autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true
menjadi false.
 
![image](https://user-images.githubusercontent.com/101716699/172666735-186debab-c22c-48f1-bc9d-e490927a14f5.png)

Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan
alamat: http://localhost:8080/page/tos

![lola5](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/94846cd7-948b-4fa0-a0bb-4e95eadbc22f)

 
10.	Membuat View
Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file
baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi
kodenya seperti berikut.
 
![image](https://user-images.githubusercontent.com/101716699/172666820-1fc2b8b5-9bc4-425e-969e-661625135354.png)

Ubah method about pada class Controller Page menjadi seperti berikut:
 
![image](https://user-images.githubusercontent.com/101716699/172666890-30f0d52f-56b4-455b-a48f-7e7278347996.png)

Kemudian lakukan refresh pada halaman tersebut.

![lola6](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/bc4aa5e6-2de8-40e0-98e3-e55bfbfc13c6)


11.	Membuat Layout Web dengan CSS
Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada
codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset
css dan javascript terletak pada direktori public.
Buat file css pada direktori public dengan nama style.css (copy file dari praktikum
lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.

![image](https://user-images.githubusercontent.com/101716699/172667488-4bb6a0f6-7a69-4adb-8e93-e76093766e1c.png)
 
Kemudian buat folder template pada direktori view kemudian buat file header.php dan
footer.php

File app/view/template/header.php
![image](https://user-images.githubusercontent.com/101716699/172692603-0dfb8580-9a66-4515-aaac-5473941fd116.png)

File app/view/template/footer.php
![image](https://user-images.githubusercontent.com/101716699/172692701-afdaa21d-f2cb-4add-a866-5aacbeaf96ec.png)

File app/view/template/about.php
![image](https://user-images.githubusercontent.com/101716699/172693026-99014cae-bbc4-4c24-978a-af599a0519c4.png)

Selanjutnya refresh tampilan pada alamat http://localhost:8080/about

![lola7](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/613acdf8-9709-497a-bf37-36be1c86f71f)


<b>Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.</b>

1. halaman contact

![image](https://user-images.githubusercontent.com/101716699/173308351-ed187889-77ee-43d3-800a-0f5f5af721b1.png)
![lola8](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/dc86f976-5584-4650-a415-01534267c0bd)


# Pertemuan 13

<b> Langkah - langkah Praktikum</b>

1. Membuat Database data artikel dengan nama lab_ci4

![lola9](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/a61a7922-dc32-4160-906b-a48acfa081e4)


2. Membuat tabel pada database lab_ci4
![lola10](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/6e74e441-d950-4de2-80eb-517fb30a17dd)


3. Melakukan Konfigurasi koneksi database
Untuk menghubungkan dengan database server. Pada praktikum ini kita gunakan konfigurasi pada file .env.

![image](https://user-images.githubusercontent.com/101716699/173311825-be5ad863-7219-45a8-8fb4-d725f767d44b.png)

4. Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php

![image](https://user-images.githubusercontent.com/101716699/173312560-589c7d01-e8fe-4aed-80e9-24cdabbe9d28.png)

5. Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.

![image](https://user-images.githubusercontent.com/101716699/173336602-71de7f9b-92df-4f48-8006-e1d81939770f.png)

6. Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php.

![image](https://user-images.githubusercontent.com/101716699/173336765-800f85be-6307-40ad-9030-5a549c967a76.png)
![image](https://user-images.githubusercontent.com/101716699/173337070-9f1611c5-b47a-4a0a-a1c4-bb2b77396df8.png)

7. Belum ada data yang diampilkan karena belum ada data pada tabel database. Coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.

![image](https://user-images.githubusercontent.com/101716699/173337548-efc158c0-492f-4fd5-92e0-993e5f01b036.png)

Refresh kembali browser untuk melihat hasil perubahannya.

![lola11](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/649ed1d0-df15-4ad8-825a-0b97bc927583)


8. Membuat Tampilan Detail Artikel yaitu Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. dengan cara tambahkan fungsi baru pada Controller Artikel dengan nama view().

![image](https://user-images.githubusercontent.com/101716699/173338973-1c682c85-6691-4bb2-b469-528b68830aed.png)

9. Membuat View Detail. Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.

![image](https://user-images.githubusercontent.com/101716699/173339098-73cab41b-9e05-4828-9ae2-796480db86a6.png)

10. Membuat Routing untuk artikel detail, Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.

![image](https://user-images.githubusercontent.com/101716699/173339650-e2e0dda6-bb95-4f12-9f28-2de983c92da4.png)

Kemudian klik pada artikel 1 atau dua untuk melihat hasilnya.

![lola12](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/d4d8345f-47ed-42da-b376-76fdb99f5899)


11. Membuat Menu Admin, menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index().

![image](https://user-images.githubusercontent.com/101716699/173783134-61b5501f-0f00-4a58-a12a-0b939af609d4.png)

12. Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php

![image](https://user-images.githubusercontent.com/101716699/173786150-df852f41-8db4-43e6-a702-c1f38080441b.png)
![image](https://user-images.githubusercontent.com/101716699/173786171-6bf0105f-7412-49dc-b362-792afbe63d54.png)
![image](https://user-images.githubusercontent.com/101716699/173786181-532c16d3-d376-42d7-b3c7-b12f2f857e4f.png)

13. Tambahkan routing untuk menu admin seperti berikut

![image](https://user-images.githubusercontent.com/101716699/173804165-169c50d4-6bb1-43b7-8ded-c185265e0a22.png)
Akses menu admin dengan url http://localhost:8080/admin/artikel

![lola13](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/1acc6eec-e972-43b0-92ef-11bc23eb631c)


14. Menambah Data Artikel, tambahkan fungsi/method baru pada Controller Artikel dengan nama add().

![image](https://user-images.githubusercontent.com/101716699/173805952-4b19647e-c8fd-45e5-a130-10a69a923fe1.png)

15. Kemudian buat view untuk form tambah dengan nama form_add.php

![image](https://user-images.githubusercontent.com/101716699/173806172-758e2b04-51ba-45b5-832b-b0e0adf6d29e.png)

![lola14](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/85495d6d-1741-4ec9-a839-cb5da4474308)


16. Mengubah Data, tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().

![image](https://user-images.githubusercontent.com/101716699/173806959-efe0788f-aba1-4000-b694-8a3da0f2eed8.png)
![image](https://user-images.githubusercontent.com/101716699/173806973-c0fa4226-bb2e-4621-89ad-e1e1ddbef128.png)

17. Kemudian buat view untuk form tambah dengan nama form_edit.php

![image](https://user-images.githubusercontent.com/101716699/173807750-7bcb80f5-4825-4748-8120-101b7560ed3e.png)

![lola15](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/cb713894-5aa2-449a-b329-2c1ee387c75b)


18. Menghapus Data, tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().

![image](https://user-images.githubusercontent.com/101716699/173808436-f68c3d77-aebf-4b52-9e66-3a6b7f249500.png)

# Pertemuan 14

1. Membuat tabel user untuk login pada database lab_ci4

![image](https://user-images.githubusercontent.com/101716699/174475984-6c13a36a-b2d7-4d7d-907e-7c334e5679db.png)

2. Membuat Model User, selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori app/Models dengan nama UserModel.php

![image](https://user-images.githubusercontent.com/101716699/174476120-019ebe0f-8d19-4b6c-b7dd-89a7891a855b.png)

3. Membuat Controller User. Buat Controller baru dengan nama User.php pada direktori app/Controllers kemudian tambahkan method index() untuk menampilkan daftar user, dan method login() untuk proses login.

![image](https://user-images.githubusercontent.com/101716699/174476618-14d44bbb-177f-4b17-9fd9-336e549ad054.png)
![image](https://user-images.githubusercontent.com/101716699/174476720-b27d9f0e-0a1d-41e6-82d9-da2a1b89c40a.png)

4. Membuat View Login, buat direktori baru dengan nama user pada direktori app/views, kemudian buat file baru dengan nama login.php.

![image](https://user-images.githubusercontent.com/101716699/174478040-ab50afed-0dd5-4859-b98a-19b3446d5ba8.png)
![image](https://user-images.githubusercontent.com/101716699/174478046-8ba85797-3604-4016-bbd5-4f44dcf06e96.png)

5. Membuat Database Seeder. Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:

![image](https://user-images.githubusercontent.com/101716699/174476891-0703419f-53e8-48e9-97e5-172bfeb426a9.png)
Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:

![image](https://user-images.githubusercontent.com/101716699/174477081-ab19ef41-5a9d-456a-a7f2-95cd048ff3f3.png)

Selanjutnya buka kembali CLI dan ketik perintah berikut:

![image](https://user-images.githubusercontent.com/101716699/174477243-d8930c20-6aa7-49e7-9f37-b3a55eb64583.png)

6. Uji Coba Login Selanjutnya buka url http://localhost:8080/user/login seperti berikut:

![lola16](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/20abec93-bb34-4661-8e85-9e1197d33824)


7. Menambahkan Auth Filter, selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php pada direktori app/Filters.

![image](https://user-images.githubusercontent.com/101716699/174478620-5a359216-9937-4fbb-8b8e-c26b93659ddb.png)

8. Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:

![image](https://user-images.githubusercontent.com/101716699/174478710-70a2e8ec-d4a9-4fd1-ad64-158f3f8cfdfb.png)

9. Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.

![image](https://user-images.githubusercontent.com/101716699/174490415-d1f641b4-cb5b-4d82-bd4b-6adc732a5985.png)

10. Percobaan Akses Menu Admin, buka url dengan alamat http://localhost:8080/admin/artikel ketika alamat tersebut diakses maka, akan dimuculkan halaman login.

![lola16](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/65679e57-1a0d-4a37-9227-a8ca68aae3a3)


11. Fungsi Logout, tambahkan method logout pada Controller User seperti berikut:

![image](https://user-images.githubusercontent.com/101716699/174937609-c1bcdac0-1bf4-44f4-945f-0906a8012e46.png)

Kemudian tambahkan navbar pada admin_header seperti berikut:

![image](https://user-images.githubusercontent.com/101716699/174938958-4ba23a85-f849-4c0e-a857-62af5a265f63.png)

Ketika kita klik navbar maka akan langsunh mengarah pada halaman login.

![lola16](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/15aab388-19ed-4f9d-b830-6eb8cd672d8d)



# Pertemuan 15

1. Untuk membuat pagination, buka Kembali Controller Artikel, kemudian modifikasi kode pada method admin_index seperti berikut.

![image](https://user-images.githubusercontent.com/101716699/175770007-53df7cde-b06f-4d10-8bd1-e8372ccfb593.png)

2. Kemudian buka file views/artikel/admin_index.php dan tambahkan kode berikut dibawah deklarasi tabel data.

![image](https://user-images.githubusercontent.com/101716699/175784231-51738ac5-192b-40c3-bee1-2256c94d7bde.png)

3. Selanjutnya buka kembali menu daftar artikel, tambahkan data lagi untuk melihat hasilnya.

![lola17](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/71a7775b-bc34-4ed2-ac40-35fc5d5d44b1)


4.Membuat Pencarian, pencarian data digunakan untuk memfilter data. Untuk membuat pencarian data, buka kembali Controller Artikel, pada method admin_index ubah kodenya seperti berikut:

![image](https://user-images.githubusercontent.com/101716699/175784338-cb95ddb2-0dc2-4a1f-825c-786d68e767bf.png)

5. Kemudian buka kembali file views/artikel/admin_index.php dan tambahkan form pencarian sebelum deklarasi tabel seperti berikut:

![image](https://user-images.githubusercontent.com/101716699/175784391-1f254221-407b-46b2-8689-04c8dd875018.png)

6. Dan pada link pager ubah seperti berikut.

![image](https://user-images.githubusercontent.com/101716699/175784477-bd7ae153-ed1e-4bd0-a2ef-01f0f151ea13.png)

7. Selanjutnya ujicoba dengan membuka kembali halaman admin artikel, masukkan kata kunci tertentu pada form pencarian.
8. 
![lola18](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/7aefb4a5-7a2b-494c-bc2a-26128832923d)



9. Upload Gambar, menambahkan fungsi unggah gambar pada tambah artikel. Buka kembali Controller Artikel, sesuaikan kode pada method add seperti berikut:

![image](https://user-images.githubusercontent.com/101716699/175784604-35f91a4c-72df-4adb-a0f4-e4e5991a736e.png)

9. Kemudian pada file views/artikel/form_add.php tambahkan field input file seperti berikut.

![image](https://user-images.githubusercontent.com/101716699/175784816-c9a8c4e7-afd1-417e-8635-f64689dea551.png)

10. Dan sesuaikan tag form dengan menambahkan ecrypt type seperti berikut.

![image](https://user-images.githubusercontent.com/101716699/175784912-e6f50f36-ad8c-4e8c-8d14-1ab605ec262a.png)

11. Ujicoba file upload dengan mengakses menu tambah artikel.

![lola19](https://github.com/muhammadzidanfadilah/Lab11_web/assets/115553474/62c76537-95a1-4306-aaab-dd89bd973c2e)

