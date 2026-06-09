# Sistem Buku Tamu Digital

## Deskripsi

Sistem Buku Tamu Digital adalah aplikasi web berbasis PHP dan MySQL yang digunakan untuk mencatat data tamu secara digital. Aplikasi ini membantu proses pencatatan kunjungan menjadi lebih terstruktur, cepat, dan mudah dikelola.

Sistem memiliki dua jenis pengguna yaitu **Admin** dan **User**. Admin dapat mengelola seluruh data tamu serta pengguna, sedangkan User hanya dapat melihat data konsultasi miliknya sendiri.

---

## Fitur Utama

### Login dan Logout

* Login menggunakan username dan password
* Session login
* Role Admin dan User
* Logout sistem

### Dashboard Admin

* Menampilkan ringkasan data tamu
* Menampilkan jumlah data tamu
* Menampilkan statistik kunjungan
* Mengelola seluruh data dalam sistem

### Dashboard User

* Menampilkan data konsultasi milik sendiri
* Menampilkan statistik konsultasi
* Menampilkan status konsultasi
* Menampilkan riwayat konsultasi

### Manajemen Data Tamu

* Menampilkan data tamu
* Menambah data tamu
* Mengubah data tamu
* Menghapus data tamu
* Pencarian data tamu

### Kelola User

* Menampilkan daftar pengguna
* Mengaktifkan akun pengguna
* Menonaktifkan akun pengguna
* Pembatasan akses berdasarkan role

---

## Teknologi yang Digunakan

* PHP Native
* MySQL / MariaDB
* HTML5
* CSS3
* Bootstrap 5

---

## Struktur Project

```text
sistem-buku-tamu/
│
├── assets/
│   └── css/
│       └── style.css
│
├── koneksi.php
├── cek_login.php
├── login.php
├── logout.php
│
├── dashboard.php
├── dashboard_user.php
│
├── data_tamu.php
├── tambah_tamu.php
├── edit_tamu.php
├── hapus_tamu.php
│
├── kelola_user.php
│
└── database/
    └── buku_tamu.sql
```

---

## Akun Login Default

### Admin

* Username: `admin`
* Password: `admin123`

### User

* Username: `user`
* Password: `admin123`

> Akun default digunakan untuk kebutuhan pengujian dan demonstrasi aplikasi.

---

## Anggota Kelompok

### 1. Sarirotun Ni'mah

**Backend Developer**

Tanggung jawab:

* Perancangan database MySQL
* Pembuatan koneksi database
* Implementasi fitur login dan logout
* Implementasi CRUD data tamu
* Implementasi manajemen user
* Pengaturan session dan hak akses pengguna

### 2. Fitriani Nafisa Wailegi

**Frontend Developer**

Tanggung jawab:

* Perancangan antarmuka pengguna (UI)
* Pembuatan dashboard Admin dan User
* Implementasi Bootstrap 5
* Styling menggunakan CSS
* Pengembangan tampilan dan pengalaman pengguna (UI/UX)

---

## Cara Menjalankan

1. Jalankan Laragon atau XAMPP.
2. Buat database dengan nama:

```sql
sistem_buku_tamu
```

3. Import file database:

```text
buku_tamu.sql
```

4. Simpan project ke folder:

```text
www
```

(jika menggunakan Laragon)

5. Buka browser dan akses:

```text
http://localhost/sistem-buku-tamu
```

6. Login menggunakan akun yang telah disediakan.

---

## Mata Kuliah

Pemrograman Web C

---

## Program Studi

Sistem Informasi

---

## Tahun

2026
