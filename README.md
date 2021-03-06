# Quiz 3

## Buat Branch

Buatlah branch dengan nama sesuai dengan username Gitlab kalian!

## 0. Setup (5 poin)

Repositori ini dibangun dengan Laravel versi 6.0 ke atas. Setelah melakukan clone dari repositori ini, lakukanlah langkah-langkah di bawah ini untuk menjalankan project.

-   masuk ke direktori quiz-3-22-sabtu

```bash
$ cd quiz-3-22-sabtu
```

-   jalankan perintah composer install untuk mendownload direktori vendor . Note : jika terjadi error coba perintah `composer update` untuk menggantikan perintah composer install

```bash
$ composer install
```

-   buat file .env lalu isi file tersebut dengan seluruh isi dari file .env.example (copy isi dari .env.example lalu paste di file .env)

-   jalankan perintah php artisan key generate

```bash
$ php artisan key:generate
```

-   Tambahan: Untuk pengerjaan di laptop/PC masing-masing, sesuaikan nama database, username dan password nya di file .env dengan database kalian. (database tidak perlu dikirim)

Setelah itu kalian sudah bisa lanjut mengerjakan soal berikutnya. jangan lupa untuk menjalankan server laravel

```bash
$ php artisan serve
```

## 1. Membuat ERD (20 poin)

Seorang klien ingin dibuatkan sebuah aplikasi web untuk review film. Harapannya aplikasi web ini dapat digunakan untuk komunitas review film mendaftar.

berikut deskripsi singkat mengenai requirement web tersebut (tabel-tabel beserta hubungan di antara tabel):

-   table "film" terdapat data : judul (VARCHAR), desc (TEXT), tahun (VARCHAR)
-   table "genre" terdapat data : nama(VARCHAR)
-   table "pemain" terdapat data : nama(VARCHAR), peran(VARCHAR)
-   seorang pemain bisa memiliki banyak film. sebuah film dapat dimainkan oleh banyak pemain secara bersama
-   satu film memiliki banyak genre.
-   seorang pemain memiliki satu peranan utama dalam sebuah film

Buatlah ERD untuk keperluan web tersebut lalu export ke dalam format gambar (PNG). Kamu bisa gunakan mysql workbench atau aplikasi online https://app.diagrams.net/.

Simpan file PNG tersebut di dalam folder images dan simpan folder images tersebut di folder public di project ini.

## 2. Membuat Migrations (15 poin)

Buatlah Migration yang diimplementasi dari ERD yang dibuat di soal sebelumnya.

## 3. Membuat Controller (10 poin)

Buatlah controller untuk mengatur fitur CRUD "film".

## 4. Memasangkan Template & Routing(25 poin)

-   Pada project ini kamu diminta untuk memasangkan template dari SB-Admin-2 https://startbootstrap.com/themes/sb-admin-2/. Kami sudah memasangkan asset-asset yang sudah didownload dari halaman SB-Admin-2 di folder public. Tugas kamu adalah memperbaiki template master blade yang terdapat di folder resources/views/layouts/master.blade.php dan hubungkan dengan asset-asset yang diperlukan. (5 poin)
-   Web memiliki route sebagai berikut: (10 poin)

| url                 | method   | keterangan                                                                                                    |
| ------------------- | -------- | ------------------------------------------------------------------------------------------------------------- |
| `'/'`               | `GET`    | menampilkan gambar PNG/JPG/JPEG desain ERD yang sudah dibuat di soal no. 1                                    |
| `'/film' `          | `GET`    | menampilkan tabel berisi data film yang tersedia                                                              |
| `'/film/create'`    | `GET`    | menampilkan form untuk membuat data film baru, di dalam form tersebut terdapat input pengisian data-data film |
| `'/film'`           | `POST`   | menyimpan data film baru                                                                                      |
| `'/film/{id}'`      | `GET`    | No #6                                                                                                         |
| `'/film/{id}/edit'` | `GET`    | menampilkan form untuk edit data-data film                                                                    |
| `'/film/{id}'`      | `PUT`    | menyimpan data film yang sudah diedit melalui form edit film                                                  |
| `'/film/{id}'`      | `DELETE` | menghapus data film dengan id tertentu                                                                        |

-   pasangkanlah script berikut ini ke HANYA ke halaman blade untuk menampilkan data pada tabel film (pada url `'/film'`). (10 poin)
    Keterangan : `Swal` merupakan function dari file swal.min.js yang terdapat di folder public/sbadmin2/swal.min.js

```html
<script>
    Swal.fire({
        title: "Berhasil!",
        text: "Memasangkan script sweet alert",
        icon: "success",
        confirmButtonText: "Cool",
    });
</script>
```

-   Jika pemasangan script pada poin sebelumnya berhasil maka akan menampilkan alert seperti ini di halaman courses tersebut:

![swal-example.gif](swal-example.gif?raw=true)

## 5. Alur CRUD (10 poin)

Pastikan alur CRUD film berjalan seperti alur CRUD biasanya. Gambarannya adalah seperti berikut:

-   halaman index film (`'/film'`) menampilkan tabel kumpulan film lengkap beserta tombol-tombol actionnya. terdapat pula tombol menuju form pembuatan film.
-   halaman create film menampilkan form untuk membuat film baru, sesudah submit lalu halaman kembali ke index film.
-   halaman edit untuk menampilkan form edit film, sesudah submit update lalu kembali ke index film
-   Tombol Delete pada halaman index film, berfungsi menghapus data film berdasarkan id

## 6. Menampilkan Genre-genre di Halaman Show film (15 poin)

Tampilkanlah detil film pada route `'/film/{id}'` seperti berikut :
![quiz-3.png](quiz-3.png?raw=true)
