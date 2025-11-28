# 🚀 EVENTOPS

### **Advanced Event Operation & Workflow Management System (PHP Native + MySQL + MVC)**

EventOps adalah aplikasi web profesional untuk mengelola seluruh operasional event kampus secara terstruktur dan modern.
Sistem ini dirancang dengan arsitektur **MVC**, menggunakan **PHP Native (OOP)**, **MySQL**, serta mendukung **Google OAuth Login**, **workflow approval**, **Gantt chart**, **push notifications**, dan **document management**.

Proyek ini mengikuti standar aplikasi perusahaan (enterprise-level) dengan folder terstruktur, solusi modular, dan scalable.

---

# 📌 **Daftar Isi**

- [Deskripsi Singkat](#deskripsi-singkat)
- [Fitur Utama](#fitur-utama)
- [Alur Aplikasi](#alur-aplikasi)
- [Teknologi yang Digunakan](#teknologi-yang-digunakan)
- [Struktur Folder Lengkap](#struktur-folder-lengkap)
- [Panduan Instalasi](#panduan-instalasi)
- [Konfigurasi Google OAuth](#konfigurasi-google-oauth)
- [Struktur Database](#struktur-database)
- [Roadmap Pengembangan](#roadmap-pengembangan)
- [Lisensi](#lisensi)

---

# 📝 **Deskripsi Singkat**

**EventOps** adalah platform untuk membantu panitia event kampus dalam:

- Perencanaan & persiapan event
- Koordinasi panitia & divisi
- Manajemen tugas & workflow
- Sistem approval berjenjang
- Upload dokumen & versioning
- Analisis performa event
- Notifikasi (email & web push)

Aplikasi ini fokus pada **enterprise operation management**, bukan sekadar CRUD sederhana.

---

# 🎯 **Fitur Utama**

## ✅ **1. Autentikasi & Manajemen Pengguna**

- Login menggunakan **Google OAuth (Google Identity Services)**
- Role user:

  - Admin Kampus
  - Ketua Event
  - Koordinator Divisi
  - Anggota Panitia

- Manajemen hak akses melalui middleware

---

## ✅ **2. Dashboard Analytics**

Dashboard menampilkan data operasional:

- Ringkasan jumlah event aktif
- Task overview
- Approval pending
- Dokumentasi terbaru
- Chart.js integration:

  - Grafik time-series (penyelesaian tugas per hari)
  - Grafik kategori (task per divisi)
  - Grafik status (Done, Pending, In Progress, Review)

---

## ✅ **3. Event Lifecycle Management**

Setiap event memiliki alur/phase:

- Proposal
- Persiapan
- Publikasi
- Registrasi
- Pelaksanaan
- Closing

Pengguna dapat:

- Membuat event
- Mengatur timeline
- Menetapkan divisi & panitia
- Melihat progress keseluruhan event

---

## ✅ **4. Workflow Approval Multi-Level**

Terdiri dari approval:

- Proposal event
- Anggaran
- Pengajuan ruangan
- Publikasi poster
- Dokumen MoU

Level approval:

1. Ketua Event
2. Koordinator
3. Admin Kampus

Semua approval disimpan dalam log aktivitas.

---

## ✅ **5. Task & Assignment Management**

Task board menyerupai Trello:

- Kolom status: Todo → In Progress → Review → Done
- Deadline & priority
- Multi user assignment
- Upload file per task
- Activity log setiap perubahan

---

## ✅ **6. Divisi & Struktur Organisasi Event**

Divisi default:

- Publikasi
- Konsumsi
- Dokumentasi
- Acara
- Sponsorship
- Perlengkapan
- Keamanan

Setiap divisi memiliki koordinator & anggota.

---

## ✅ **7. Document Management (Versioning System)**

Seperti mini Google Drive:

- Upload dokumen
- Versioning otomatis
- Commenting untuk diskusi
- Approval dokumen
- Folder per phase event

File dapat berupa:

- Proposal
- Poster
- Rundown
- MoU
- Invoice
- Laporan akhir

---

## ✅ **8. Gantt Chart Timeline**

Menggunakan library:

- frappe-gantt / jsgantt-improved

Menampilkan:

- Event phases
- Deadline
- Ketergantungan task
- Progress bar

---

## ✅ **9. Notifikasi**

### Web Push Notification:

- Reminder deadline
- Approval request
- Dokumen versi baru

### Email Notification (PHPMailer):

- Konfirmasi tugas
- Notifikasi penolakan approval
- Reminder panitia

Semua notifikasi dicatat dalam tabel `notifications`.

---

## ✅ **10. Laporan & Export**

- Export CSV (tugas, divisi, panitia)
- Export PDF:

  - Laporan progress event
  - Laporan akhir
  - Ringkasan keuangan

---

# 🧭 **Alur Aplikasi**

1. **User login via Google OAuth**
2. Arahkan ke Dashboard (statistics + charts)
3. Ketua membuat event
4. Tambah divisi & panitia
5. Koordinator membuat task
6. Anggota menjalankan task, upload dokumen
7. Jika butuh approval → alur workflow berjalan
8. Dosen/admin memberikan persetujuan
9. Seluruh progress tampil dalam Gantt chart
10. Setelah event selesai, generate laporan final

---

# 🛠 **Teknologi yang Digunakan**

| Area         | Teknologi                   |
| ------------ | --------------------------- |
| Backend      | PHP 8+ (OOP Native)         |
| Database     | MySQL 5.7/8                 |
| Frontend     | HTML, CSS, JS               |
| Charting     | Chart.js                    |
| Auth         | Google OAuth                |
| Notification | Web Push API + VAPID Keys   |
| PDF          | TCPDF / FPDF                |
| Upload       | Native PHP / Cloudinary API |
| Architecture | Custom MVC Pattern          |

---

# 📂 **Struktur Folder Lengkap**

```
irmabelle@irmas-MacBook-Pro Final_Project % tree
.
├── README.md
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
├── composer.json
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
        │   └── index.php
        ├── auth
        │   ├── google_callback.php
        │   └── login.php
        ├── dashboard
        │   └── index.php
        ├── documents
        │   └── index.php
        ├── events
        │   ├── create.php
        │   ├── detail.php
        │   ├── edit.php
        │   └── index.php
        ├── layouts
        │   ├── auth.php
        │   └── main.php
        ├── notifications
        │   └── index.php
        └── tasks
            ├── board.php
            └── create.php
```

---

# ⚙️ **Panduan Instalasi**

### 1️⃣ Clone project

```
git clone https://github.com/username/eventops.git
cd eventops
```

### 2️⃣ Install dependencies (optional)

```
composer install
```

### 3️⃣ Buat file `.env`

```
DB_HOST=localhost
DB_NAME=eventops
DB_USER=root
DB_PASS=
GOOGLE_CLIENT_ID=xxx
GOOGLE_CLIENT_SECRET=xxx
```

### 4️⃣ Import database

```
import database/db_dump.sql
```

atau import migrations secara berurutan.

### 5️⃣ Jalankan di Localhost (XAMPP / MAMP)

Letakkan folder dalam:

```
htdocs/eventops
```

Akses:

```
http://localhost/eventops/public
```

---

# 🔐 **Konfigurasi Google OAuth**

1. Buka Google Cloud Console
2. Buat project baru
3. Aktifkan: **Google Identity Services**
4. Buat OAuth Client ID (Web Application)
5. Masukkan Authorized Redirect URI:

```
http://localhost/eventops/public/index.php?route=auth/google-callback
```

6. Copy:

- CLIENT ID
- CLIENT SECRET

Masukkan ke `.env`.

---

# 🗄 **Struktur Database**

### Tabel utama:

- users
- events
- event_phases
- divisions
- division_members
- tasks
- task_assignments
- documents
- document_versions
- approvals
- notifications
- activity_logs

### Folder pendukung:

- `migrations/` → file SQL pembuatan tabel
- `seeds/` → data dummy
- `db_dump.sql` → backup penuh

---

# 🚧 **Roadmap Pengembangan**

- [ ] Menambah fitur Kalender Event (FullCalendar)
- [ ] Manajemen Anggaran (finance module)
- [ ] Sistem komentar per task
- [ ] Integrasi Google Calendar
- [ ] Live activity feed realtime (WebSocket)
- [ ] Dark mode UI

---

# 📄 Lisensi

Bebas digunakan untuk keperluan **tugas kuliah, final project, maupun portofolio pribadi**.

---

# 👨‍💻 Dibuat oleh

**Muhammad Syafiq**
**Iptul (Luthfi Zeindika)**
**Raga Satria**
Buana Perjuangan University, Karawang
