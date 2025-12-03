# EventOps – Sistem Manajemen Event Mahasiswa (PHP Native + MySQL)

EventOps adalah aplikasi web yang dirancang untuk membantu organisasi mahasiswa dan pihak kampus dalam mengelola seluruh proses event secara digital. Sistem ini menyediakan fitur manajemen event, divisi, tugas panitia, dokumen, approval, notifikasi, serta dashboard analitik. Aplikasi ini dibangun menggunakan *PHP Native* dengan arsitektur MVC, dipadukan dengan Google OAuth, Chart.js, dan Service Worker untuk notifikasi.

---

## 🚀 Fitur Utama

### 🔐 Autentikasi & Role Management

* Login menggunakan Google OAuth 2.0.
* Manajemen sesi pengguna.
* Role-based access (Admin, Ketua Event, Koordinator, Panitia).

### 🗂 Manajemen Event

* CRUD Event.
* Detail event lengkap (lokasi, tanggal, fase event).
* Pengelolaan fase event (Planning → Running → Evaluation).

### 🧩 Manajemen Divisi & Panitia

* Pembuatan divisi.
* Assign koordinator.
* Assign anggota panitia.
* Struktur organisasi event.

### 📌 Manajemen Tugas (Task Board)

* Penugasan tugas berdasarkan divisi.
* Task Board (Kanban View): To Do → In Progress → Done.
* Update progres tugas oleh panitia.

### 📁 Manajemen Dokumen

* Upload proposal, MoU, surat, file pendukung event.
* Sistem versioning dokumen.
* Detail & download dokumen.

### ✔️ Sistem Approval

* Persetujuan proposal event dan anggaran.
* Riwayat persetujuan dan catatan revisi.

### 🔔 Notifikasi

* Notifikasi untuk tugas baru.
* Notifikasi approval.
* Notifikasi deadline.
* Service Worker (sw.js) siap untuk push notification.

### 📊 Dashboard Analitik

* Grafik kategori event.
* Grafik time-series pendaftaran atau progress.
* Ringkasan total event, tugas, divisi, dan user.
* Komponen Chart Cards.

---

## 🏛 Arsitektur Sistem

EventOps menggunakan arsitektur berikut:

```
Request → Router → Middleware → Controller → Service → Model → Database
                                          ↓
                                   View Renderer
```

Struktur ini memastikan aplikasi lebih terorganisir, mudah dikembangkan, dan scalable.

---

## 📁 Struktur Folder

```
Final_Project/
├── README.md
├── composer.json
├── app
│   ├── Api
│   │   ├── ApiClient.php
│   │   ├── CloudinaryApiClient.php
│   │   └── GoogleApiClient.php
│   ├── Config
│   │   ├── AppConfig.php
│   │   └── Database.php
│   ├── Controllers
│   │   ├── ApprovalController.php
│   │   ├── AuthController.php
│   │   ├── DashboardController.php
│   │   ├── DivisionController.php
│   │   ├── DocumentController.php
│   │   ├── EventController.php
│   │   ├── NotificationController.php
│   │   ├── TaskController.php
│   │   └── TimelineController.php
│   ├── Core
│   │   ├── Auth.php
│   │   ├── Controller.php
│   │   ├── Model.php
│   │   ├── Router.php
│   │   └── View.php
│   ├── Helpers
│   │   ├── JwtHelper.php
│   │   ├── Response.php
│   │   ├── Utils.php
│   │   └── Validator.php
│   ├── Middleware
│   │   ├── AuthMiddleware.php
│   │   └── RoleMiddleware.php
│   ├── Models
│   │   ├── ActivityLog.php
│   │   ├── Approval.php
│   │   ├── Division.php
│   │   ├── Document.php
│   │   ├── DocumentVersion.php
│   │   ├── Event.php
│   │   ├── EventPhase.php
│   │   ├── Notification.php
│   │   ├── Task.php
│   │   ├── TaskAssignment.php
│   │   └── User.php
│   └── Services
│       ├── AnalyticsService.php
│       ├── ApprovalService.php
│       ├── AuthService.php
│       ├── DocumentService.php
│       ├── EmailService.php
│       ├── EventService.php
│       ├── GoogleOAuthService.php
│       ├── NotificationService.php
│       ├── PushNotificationService.php
│       ├── TaskService.php
│       └── UploadService.php
├── database
│   ├── db_dump.sql
│   ├── migrations
│   │   ├── create_approvals.sql
│   │   ├── create_divisions.sql
│   │   ├── create_documents.sql
│   │   ├── create_events.sql
│   │   ├── create_tasks.sql
│   │   └── create_users.sql
│   └── seeds
│       ├── seed_divisions.sql
│       ├── seed_events.sql
│       ├── seed_tasks.sql
│       └── seed_users.sql
├── public
│   ├── assets
│   │   ├── css
│   │   ├── img
│   │   ├── js
│   │   └── vendor
│   ├── index.php
│   ├── sw.js
│   └── uploads
└── resources
    ├── components
    │   ├── chart_cards.php
    │   ├── navbar.php
    │   └── sidebar.php
    └── views
        ├── approvals
        ├── auth
        ├── dashboard
        ├── documents
        ├── events
        ├── layouts
        ├── notifications
        └── tasks
```

---

## ⚙️ Instalasi

### 1️⃣ Clone Repository

```
git clone https://github.com/Leoallogne/Final_Project.git
cd Final_Project
```

### 2️⃣ Setup Database

* Buat database baru.
* Import file berikut:

```
database/db_dump.sql
```

atau jalankan file migration secara manual.

### 3️⃣ Konfigurasi Aplikasi

Edit file:

```
app/Config/AppConfig.php
```

Atur:

* BASE_URL
* GOOGLE_CLIENT_ID
* GOOGLE_CLIENT_SECRET
* DB_HOST, DB_USER, DB_PASS

### 4️⃣ Jalankan Aplikasi

Pastikan server suda berjalan (XAMPP/MAMP/Laragon).
Akses melalui:

```
http://localhost/Final_Project/public
```

---

## 📡 Teknologi yang Digunakan

* PHP Native (OOP)
* MySQL (PDO)
* HTML, CSS, JavaScript
* Chart.js
* Google OAuth API
* MVC Architecture
* Service Worker

---

## 👨‍💻 Developer

**Muhammad Syafiq**
Universitas Buana Perjuangan Karawang – Teknik Informatika

---

## 📌 Status Proyek

**Sedang dalam tahap pengembangan inti (active development).**

---

EventOps – *Build Better Campus Events.*
