<div align="center">
  <br />

  <h1>LAPORAN PRAKTIKUM <br>
  APLIKASI BERBASIS PLATFORM
  </h1>

  <br />

  <h3>MODUL - 10<br>
  AJAX
  </h3>

  <br />

  <img width="512" height="512" alt="telyu" src="https://github.com/user-attachments/assets/22ae9b17-5e73-48a6-b5dd-281e6c70613e" />

  <br />
  <br />
  <br />

  <h3>Disusun Oleh :</h3>

  <p>
    <strong>Arvan Murbiyantoo</strong><br>
    <strong>2311102074</strong><br>
    <strong>S1 IF-11-04</strong>
  </p>

  <br />

  <h3>Dosen Pengampu :</h3>

  <p>
    <strong>Cahyo Prihantoro, S.Kom., M.Eng. </strong>
  </p>
  
  <br />
  <h3>LABORATORIUM HIGH PERFORMANCE
 <br>FAKULTAS INFORMATIKA <br>UNIVERSITAS TELKOM PURWOKERTO <br>2026</h3>
</div>

<hr>

# Dasar Praktikum

Buat sebuah halaman web yang bisa mengambil data dari server lalu menampilkannya di halaman tanpa perlu reload.

_Instruksi Detail:_

1. _Membuat File Server_ (data.php)
   Buat file PHP yang berfungsi sebagai “database sederhana”.
   Data cukup berupa array (misalnya: nama, pekerjaan, lokasi).
   Contoh data:

['nama' => 'Budi', 'pekerjaan' => 'Web Developer', 'lokasi' => 'Jakarta']
Ubah data tersebut menjadi format JSON menggunakan json_encode().
Tampilkan hasilnya dengan echo.

Jangan lupa tambahkan header:
header('Content-Type: application/json');

2. _Membuat File Client_ (index.html)
Buat tombol dengan teks "Tampilkan Profil".
Siapkan tempat untuk menampilkan data, misalnya:
<div id="hasil-profil"></div>

3. _Membuat Logika AJAX (JavaScript)_
   Tambahkan event ketika tombol diklik.
   Gunakan fetch() (atau boleh pakai XMLHttpRequest / jQuery AJAX) untuk mengambil data dari data.php.
   Ambil hasil response dalam bentuk JSON.

Tampilkan data tersebut ke dalam <div id="hasil-profil"> dengan format:
_Nama: Budi | Pekerjaan: Web Developer | Lokasi: Jakarta_

# Dasar Teori

## 1. Apa Itu AJAX

AJAX (Asynchronous JavaScript and XML) suatu teknik pemrograman berbasis web untuk menciptakan
aplikasi web interaktif. Tujuannya adalah untuk memindahkan sebagian besar interaksi pada komputer user, melakukan pertukaran data dengan server di belakang layar, sehingga halaman web tidak harus dibaca ulang secara keseluruhan setiap kali seorang pengguna melakukan perubahan. Hal ini akan meningkatkan interaktivitas, kecepatan, dan usability.
Secara umum, AJAX melibatkan dua hal yakni:

1. Objek XMLHttpRequest bawaan browser (untuk meminta data dari sebuah web server).
2. Javascript dan HTML DOM (untuk menampilkan data pada web browser).

## 2. Cara Kerja AJAX

<p align="center"><img width="407" height="209" alt="image" src="https://github.com/user-attachments/assets/d11d4513-0918-4ec6-8a27-9cd00c021964" /></p>

Dalam aplikasinya, AJAX melakukan hal-hal berikut:

1. Suatu event terjadi pada halaman web (seperti page loaded atau button clicked).
2. Sebuah objek XMLHttpRequest dibuat oleh Javascript
3. Objek XMLHttpRequest mengirimkan request kepada web server.
4. Web server mengelola request.
5. Web server mengirimkan response kepada client.
6. Response dibaca oleh Javascript.
7. Javascript melakukan perubahan pada halaman web menggunakan DOM.

## 3. Event Handling

ada contoh berikut, akan dilakukan perubahan halaman web menggunakan teknik AJAX. Berikut langkahlangkah yang perlu dilakukan:

1. Pastikan PHP web server sudah berjalan dengan baik. Pada modul ini digunakan Apache web server
   yang terdapat pada XAMPP v3.2.2.

<p align="center"><img width="840" height="550" alt="image" src="https://github.com/user-attachments/assets/d974842f-cf95-4969-86df-80d5b82ec967" /></p>

2. Akses folder htdocs pada local server, dan kemudian buat folder baru dengan nama seperti: ajax
   <p align="center"><img width="934" height="251" alt="image" src="https://github.com/user-attachments/assets/db5feec4-ff23-4fee-bc00-e241eb3dbf1f" /></p>
3. Buat file .txt berikut yang berfungsi sebagai pengganti konten halaman web.
   ` <h1>AJAX</h1>
    <p>AJAX is not a programming language.</p> 
    <p>AJAX is a technique for accessing web servers from a web 
    page.</p> 
    <p>AJAX stands for Asynchronous JavaScript And XML.</p> 
    `
   Simpan file sebagai ajax_info.txt.
4. Buat juga file HTML utama yang berisikan code sebagai berikut. Dan simpan sebagai index.html

```
<!DOCTYPE html>
<html>
<head>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
     <h2>The jQuery AJAX</h2>
     <p id="demo">Let AJAX change this text.</p>
     <button type="button" id="changeBtn">Change Content</button>
     <script>
       $(document).ready(function() {
         $("#changeBtn").click(function() {
           $("#demo").load("ajax_info.txt");
         });
       });
     </script>
</body>
</html
```

5. Tempatkan kedua file tersebut kedalam folder ajax yang telah dibuat pada langkah kedua sehingga
posisi kedua file seperti berikut.
<p align="center"><img width="977" height="411" alt="image" src="https://github.com/user-attachments/assets/841683af-536d-4875-b3c4-3065dcb09e22" /></p>

6. Ketika anda mengakses halaman web tersebut pada alamat http://localhost/ajax/, tampilan yang
akan muncul adalah seperti gambar 10-5.
<p align="center"><img width="630" height="288" alt="image" src="https://github.com/user-attachments/assets/18169003-574b-41f3-9294-ccdb4733337d" /></p>

7. Namun jika anda melakukan action yaitu menekan button Change Content, maka konten pada
halaman web akan menjadi seperti ini.
<p align="center"><img width="650" height="403" alt="image" src="https://github.com/user-attachments/assets/5248b9d8-86e2-4be6-928a-295ba3d3b267" /></p>

Berikut adalah penjelesannya:

1. Peran terbesar AJAX pada kode di bawah ini adalah melakukan request ke server dan mengubah
   konten halaman tanpa perlu me-refresh browser:

```
<script>
  $(document).ready(function() {
    $("#changeBtn").click(function() {
      $("#demo").load("ajax_info.txt");
    });
  });
</script>
```

Code tersebut akan dieksekusi ketika halaman sudah siap (document ready) dan button dengan id
"changeBtn" ditekan.

2. Kode di atas menggunakan jQuery yang harus diinclude terlebih dahulu:

```
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
```

3. $(document).ready() memastikan bahwa kode jQuery akan dijalankan setelah halaman web selesai
   dimuat sepenuhnya.

4. Event handler $("#changeBtn").click() akan mendeteksi kapan tombol dengan id "changeBtn" diklik
   oleh user.

5. Method .load() akan melakukan request ke server untuk mengambil konten dari file "ajax_info.txt".
   Sintaksnya:

```
$("#demo").load("ajax_info.txt");
```

Dimana:
• #demo: elemen yang akan diubah kontennya
• ajax_info.txt: file yang diminta dari server

6. Proses request dilakukan secara asynchronous, yang berarti:
   • Halaman web tetap responsif selama proses request
   • User bisa melakukan interaksi lain sambil menunggu response
   • Tidak ada refresh halaman saat konten diperbarui

7. Ketika server merespon dengan mengirimkan konten dari ajax_info.txt, jQuery akan otomatis
   mengupdate isi dari elemen dengan id="demo".

## 4. Implementasi AJAX dengan JQuery

AJAX dengan jQuery dapat diimplementasikan menggunakan metode $.ajax() yang menyediakan kontrol
detail dalam melakukan request. Metode ini sangat berguna ketika kita membutuhkan penanganan yang
lebih spesifik terhadap response dari server atau ingin menambahkan konfigurasi tambahan pada request AJAX.
Berikut adalah contoh implementasi AJAX menggunakan metode $.ajax():

```
<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h2>The jQuery AJAX</h2>
    <p id="demo">Let AJAX change this text.</p>
    <button type="button" id="changeBtn">Change Content</button>
    <script>
        $(document).ready(function () {
            $("#changeBtn").click(function () {
                $.ajax({
                    // URL yang akan diakses
                    url: "ajax_info.txt",
                    // Metode HTTP yang digunakan (POST/GET)
                    type: "GET",
                    // Data yang dikirim ke server
                    data: {
                        id: 123,
                        name: "John"
                    },
                    // Tipe data yang diharapkan dari server
                    dataType: "html",
                    // Waktu timeout dalam milidetik (5 detik)
                    timeout: 5000,
                    // Callback ketika request berhasil
                    success: function (result) {
                        $("#demo").html(result);
                    },
                    // Callback ketika request gagal
                    error: function (xhr, status, error) {
                        $("#demo").html("Error: " + error);
                    },
                    // Callback yang selalu dijalankan setelah request selesai
                    complete: function (xhr, status) {
                        console.log("Request completed with status: " + status);
                    }
                });
            });
        });
    </script>
</body>

</html>
```

Dalam konteks jQuery AJAX ada yang dikenal sebagai options atau parameter konfigurasi. Ini adalah
properti-properti yang digunakan untuk mengkonfigurasi request AJAX. Options ini memungkinkan kita
untuk menentukan berbagai aspek dari request AJAX, mulai dari URL tujuan, metode yang digunakan, data yang dikirim, hingga tipe data yang diharapkan dari server. Berikut adalah penjelasan setiap options atau parameter konfigurasi:

| Option   | Description                                            |
| -------- | ------------------------------------------------------ |
| url      | Menentukan endpoint yang akan diakses                  |
| type     | Menentukan metode HTTP (GET/POST)                      |
| data     | Object berisi parameter yang akan dikirim              |
| dataType | Menentukan tipe data response yang diharapkan          |
| timeout  | Batas waktu tunggu response dari server                |
| success  | Handler ketika request berhasil                        |
| error    | Handler ketika request gagal                           |
| complete | Handler yang selalu dijalankan setelah request selesai |

# PENGERJAAN

## 1.1 Struktur File

Program terdiri dari dua file yang diletakkan dalam satu folder project:

| File       | Peran              | Keterangan                                              |
| ---------- | ------------------ | ------------------------------------------------------- |
| data.php   | Server / Back-end  | Menyimpan data profil dan mengembalikannya sebagai JSON |
| index.html | Client / Front-end | Antarmuka pengguna; berisi tombol dan area tampil data  |

## 1.2 Penjelasan Program

### File Server (data.php)

File data.php berfungsi sebagai back-end sederhana. Langkah-langkah di dalamnya adalah:

- Mendeklarasikan header Content-Type: application/json agar browser tahu bahwa respons yang dikirim adalah data JSON.
- Mendefinisikan array asosiatif berisi data profil mahasiswa dengan key nama, pekerjaan, dan lokasi.
- Mengonversi array tersebut menjadi string JSON menggunakan fungsi json_encode().
- Menampilkan hasil JSON ke output menggunakan echo.
  Kode:

```
<?php
header('Content-Type: application/json');

$profil = [
    'nama'      => 'Andika Neviantoro',
    'pekerjaan' => 'UI/UX & Web Developer',
    'lokasi'    => 'Cilacap'
];

echo json_encode($profil);
?>
```

### File Client (index.html)

File index.html merupakan antarmuka yang dilihat pengguna. Komponen utamanya terdiri dari:

- Sebuah tombol dengan teks "Tampilkan Profil" yang memiliki id btn-tampilkan.
- Elemen <div id="hasil-profil"> sebagai wadah untuk menampilkan data yang diterima dari server.
- Blok <script> yang berisi logika AJAX menggunakan JavaScript fetch().

Kode JavaScript(fetch):

```
document.getElementById('btn-tampilkan')
  .addEventListener('click', function () {
    fetch('data.php')
      .then(function (response) { return response.json(); })
      .then(function (data) {
        var div = document.getElementById('hasil-profil');
        div.style.display = 'block';
        div.innerHTML = 'Nama: ' + data.nama +
                        ' | Pekerjaan: ' + data.pekerjaan +
                        ' | Lokasi: ' + data.lokasi;
      })
      .catch(function (error) { console.error(error); });
  });
```

## 1.3 Alurr Kerja AJAX

Berikut adalah alur kerja komunikasi antara client dan server dalam program ini:

| Langkah | Komponen           | Keterangan                                                                       |
| ------: | ------------------ | -------------------------------------------------------------------------------- |
|       1 | index.html         | User klik tombol **"Tampilkan Profil"**                                          |
|       2 | JavaScript (fetch) | Browser mengirim HTTP GET request ke `data.php` tanpa reload halaman             |
|       3 | data.php           | Server memproses request, mengembalikan data dalam format JSON                   |
|       4 | JavaScript (.then) | Response JSON di-parse lalu data ditampilkan ke elemen `<div id="hasil-profil">` |

## 1.4 Output Program

Tampilan awal run localhost:

<p align="center"><img width="697" height="299" alt="image" src="https://github.com/user-attachments/assets/f3888d60-706b-4e05-8716-43af28e33587" /></p>

Ketika tombol "Tampilkan Profil" diklik, program akan menampilkan teks berikut di dalam div tanpa reload halaman:

<p align="center"><img width="955" height="340" alt="image" src="https://github.com/user-attachments/assets/5a3820a6-3e6d-41b8-8cdb-9dcd9ddc4449" /></p>

Data tersebut diambil dari data.php secara asinkron oleh JavaScript, lalu ditampilkan langsung ke elemen HTML tanpa menyebabkan halaman ter-refresh

## 1.5 Kesimpulan

Program AJAX ini berhasil mendemonstrasikan komunikasi asinkron antara client dan server menggunakan JavaScript fetch() dan PHP. Teknologi AJAX memungkinkan halaman web menjadi lebih responsif karena data dapat diambil dan ditampilkan secara dinamis tanpa perlu memuat ulang seluruh halaman. Konsep ini menjadi dasar penting dalam pengembangan aplikasi web modern
#   m o d u l - 1 0 - a r v a n - m u r b i y a n t o 
 
 
