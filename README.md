# Final_Project – Branch `restructure-folder`

## 🌟 Deskripsi

Branch `restructure-folder` adalah versi **rapi & minimal** dari Final_Project.
Struktur folder telah disederhanakan untuk mempermudah pengembangan, testing, dan deployment, tetap menggunakan **PHP Native + MySQL + JS + CSS framework** (Bootstrap/Tailwind).

Proyek ini adalah **Web Sistem Manajemen Event Mahasiswa** dengan fitur utama:

* Autentikasi & Role Management (Admin, Ketua Event, Panitia)
* CRUD Event & Task
* Dashboard & Grafik Analitik
* Notifikasi (Web Push / Email)

---

## 📁 Struktur Folder Sederhana

```
Final_Project/
├── README.md
├── app
│   ├── Config
│   │   └── AppConfig.php
│   ├── Controllers
│   │   ├── AuthController.php
│   │   ├── DashboardController.php
│   │   ├── EventController.php
│   │   └── TaskController.php
│   ├── Models
│   │   ├── User.php
│   │   ├── Event.php
│   │   └── Task.php
│   ├── Services
│   │   ├── AuthService.php
│   │   └── EventService.php
│   └── Core
│       ├── Controller.php
│       ├── Model.php
│       └── View.php
├── database
│   └── migrations
├── public
│   ├── index.php
│   ├── sw.js
│   └── assets
│       ├── css
│       ├── js
│       └── img
└── resources
    ├── views
    │   ├── auth
    │   │   └── login.php
    │   ├── dashboard
    │   │   └── index.php
    │   ├── events
    │   │   └── index.php
    │   └── tasks
    │       └── index.php
    └── components
        ├── navbar.php
        ├── sidebar.php
        └── chart_cards.php
```

---

## ⚙️ Instalasi Lokal

1. **Clone branch `restructure-folder`:**

```bash
git clone -b restructure-folder https://github.com/Leoallogne/Final_Project.git
cd Final_Project
```

2. **Setup Database**

* Buat database baru di MySQL/MariaDB.
* Import dump jika tersedia:

```bash
mysql -u root -p < database/db_dump.sql
```

3. **Konfigurasi Aplikasi**

* Edit `app/Config/AppConfig.php`
* Atur:

  * `BASE_URL`
  * `DB_HOST`, `DB_USER`, `DB_PASS`
  * `API_KEY` (jika ada)

4. **Jalankan Server Lokal**

* Gunakan XAMPP/MAMP/Laragon atau PHP built-in server:

```bash
php -S localhost:8000 -t public
```

* Akses: `http://localhost:8000`

---

## 🔄 Alur Sistem (Flow)

1. Pengguna membuka **login page**.
2. **AuthController** memverifikasi kredensial (password_hash atau Google OAuth).
3. Setelah login:

   * Admin bisa mengelola Event, Task, dan User.
   * Panitia melihat Task Board dan update progres.
4. **EventController** menangani CRUD event.
5. **TaskController** menangani CRUD task dan assignment.
6. **DashboardController** menampilkan grafik & ringkasan analitik.
7. **NotificationService** mengirim notifikasi push/email sesuai kondisi.
8. Semua interaksi data disimpan di **Models** (`User.php`, `Event.php`, `Task.php`) menggunakan OOP & PDO.

---

## 📌 Fitur Utama

* Login / Logout / Role-based access
* CRUD Event & Task
* Dashboard analitik dengan Chart.js
* Notifikasi real-time (Push / Email)
* Seed data untuk testing

---

## 👨‍💻 Developer

**Muhammad Syafiq** – Universitas Buana Perjuangan Karawang
