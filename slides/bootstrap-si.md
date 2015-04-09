## BOOTSTRAP
## Tutorial Dasar Untuk Pemula
### Sistem Informasi *UDINUS*

Presented by: Fahri Firdausillah

http://fahrifirdaus.web.id

---

### Perkenalan Pemateri

- **Nama Lengkap:** Fahri Firdausillah
- **Alamat:** Jl. Dewi Sartika, Semarang
- **Pendidikan:**
	- Madrasah Qudsiyyah (MI, MTS, MA)
	- TI-S1 UDINUS (lulus tahun 2009)
	- Database Technology UTeM (lulus tahun 2012)
- **Riwayat Pekerjaan:** 
	- Programmer di PSI UDINUS (2009 - 2010)
	- Dosen Pemrograman di UDINUS (2012 - sekarang)
	- Freelance Programmer (2007 - sekarang)
    
---

### Perkenalan Bootstrap Sekilas

- Bootstrap adalah salah satu CSS Framework yang paling banyak digunakan saat ini
- Bootstrap memiliki kelebihan penggunaannya yang simple, dan berorientasi pada mobile first
- Sehingga halaman HTML yang didesain dengan menggunakan Bootstrap saat dibuka pada perangkat mobile akan tetap bagus dan mudah untuk dibaca
- Bootstrap awalnya digunakan oleh twitter untuk mendesain halaman web-nya, namun saat ini sudah di-open source-kan untuk dapat digunakan dan dimodifikasi oleh siapa saja.

--

### Bootstrap vs Conventional CSS

- Bootstrap memudahkan kita untuk mengatur layout tanpa harus pusing memikirkan boxing dan positioning
- Pengaturan layout di bootstrap hanya memerlukan penambahan class spesifik
- Bootstrap juga menyediakan beberapa komponen tampilan yang siap pakai
- Termasuk juga icon dan beberapa elemen animasi berbasis javascript
- Meski demikian, untuk membuat layout kita berbeda dari pengguna bootstrap lain, kita masih memerlukan editing style dengan menggunakan CSS

---

## Web yang akan kita buat

--

### Halaman Login

![Halaman Login](./images-si/login.png)

--

### Halaman Dashboard

![Halaman Dashboard](./images-si/dashboard.png)

--

### Halaman Form Buku

![Halaman Form Buku](./images-si/form_buku.png)

--

### Halaman List Buku

![Halaman List Buku](./images-si/list_buku.png)

---

### Template Halaman Dengan Boostrap

- ```starter.html``` adalah template kita disini untuk menggunakan bootstrap
- Kode untuk memasukkan style bootstrap ke dalam halaman kita adalah

```
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
```

- Sedangkan untuk memperkaya fitur, kita juga memasukkan kode javascript

```
[script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"][/script]
[script src="bootstrap/js/bootstrap.min.js"][/script]
```

--

![Template Starter](./images-si/starter.png)

---

## Membuat Halaman Login HTML 

--

### Kerangka Navbar

- Copy ```starter.html``` menjadi file baru dengan nama ```login.html```
- Ganti isi Title menjadi ```Login Aplikasi Perpustakaan```
- Hapus ```<h1>Hello World!</h1>``` dan ganti sesuai instruksi selanjutnya
- Karena kita ingin menggunakan navbar untuk bagian atas, copy-kan  template navbar yang ada pada navbar.txt
- Untuk merubah warna menjadi hitam, ubah class ```navbar-default``` menjadi ```navbar-inverse```
- Kemudian untuk membuat navbar selalu di atas, tambahkan class ```navbar-fixed-top```

--

### Header Aplikasi dan Form Login

- Di dalam ```div container```, tambahkan kode yang ada pada navbar-header.txt untuk membuat header aplikasi
- Ganti teks di dalam ```a navbar-brand``` menjadi "SisFo Perpustakaan"
- Tambahkan juga kode pada navbar-login-form.txt persis di bawah ```div navbar-header```
- Untuk membuat form berjajar dari kiri ke kanan secara rapi, tambahkan class ```navbar-form navbar-right``` pada ```form```
- Terakhir untuk merubah warna tombol login, ubah class ```button``` dari ```btn-default``` menjadi ```btn-success```

--

### Pisahkan Konten Menjadi 2 Kolom

- 