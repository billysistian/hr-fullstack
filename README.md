<<<<<<< HEAD
<p align="center">
  <img src="assets/img/hr-system.png" width="100%">
</p>

# HR Management System

HR Fullstack Trigger Audit Log:

* JWT Authentication
* CRUD Karyawan
* RESTful API
* Trigger Audit Log
* Audit Log DataTables
* Export PDF
* KaiAdmin Template

---

# Tech Stack

* Laravel 11
* MySQL / MariaDB
* JWT Auth
* Bootstrap 5
* KaiAdmin
* Axios
* DataTables
* DOMPDF

---

# Default Login

```txt
Email    : admin@gmail.com
Password : pass123
```

---

# Instalasi Project

## 1. Clone Repository

```bash
git clone <repository-url>
```

---

## 2. Install Dependency

```bash
composer install
```

---

## 3. Copy Environment

Linux / Git Bash:

```bash
cp .env.example .env
```

Windows CMD:

```bash
=======
# HR Management System

HR Fullstack Trigger Audit Log:

* JWT Authentication
* CRUD Karyawan
* RESTful API
* Trigger Audit Log
* Audit Log DataTables
* Export PDF
* KaiAdmin Template

---

# Tech Stack

* Laravel 11
* MySQL / MariaDB
* JWT Auth
* Bootstrap 5
* KaiAdmin
* Axios
* DataTables
* DOMPDF

---

# Default Login

```txt
Email    : admin@gmail.com
Password : pass123
```

---

# Instalasi Project

## 1. Clone Repository

```bash
git clone <repository-url>
```

---

## 2. Install Dependency

```bash
composer install
```

---

## 3. Copy Environment

Linux / Git Bash:

```bash
cp .env.example .env
```

Windows CMD:

```bash
>>>>>>> 79cb67b758898a75cf28d28b2b76b311cb00cd0e
copy .env.example .env
```

---

## 4. Generate Application Key

```bash
php artisan key:generate
```

---

# Konfigurasi Database

Buka file `.env`

Sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=HR
DB_USERNAME=root
DB_PASSWORD=
```

---

# Buat Database

Buat database baru:

```sql
CREATE DATABASE HR;
```

---

# Jalankan Migration

```bash
php artisan migrate
```

---

# Jalankan Seeder

```bash
php artisan db:seed
```

Seeder akan membuat user default:

```txt
admin@gmail.com
pass123
```

---

# Setup JWT Secret

```bash
php artisan jwt:secret
```

---

# Set Expired Token 1 Menit

Tambahkan di `.env`

```env
JWT_TTL=1
```

---

# Setup Database Trigger

Jalankan file trigger SQL:

## CMD

```bash
mysql -u root -p HR < database/sql/trigger.sql
```

## PowerShell

```powershell
Get-Content database/sql/trigger.sql | mysql -u root -p HR
```

---

# Menjalankan Project

```bash
php artisan serve
```

Akses:

```txt
http://127.0.0.1:8000
```

---

# Fitur Aplikasi

## Authentication

* Login JWT
* Token expired 1 menit

## Karyawan

* Tambah data
* Edit data
* Hapus data
* List data

## Audit Log

* Trigger INSERT
* Trigger UPDATE
* Trigger DELETE

## Report

* Export PDF

---

# API Endpoint

## Login

```http
POST /api/login
```

---

## Profile

```http
GET /api/me
```

---

## CRUD Karyawan

```http
GET    /api/karyawan
POST   /api/karyawan
PUT    /api/karyawan/{id}
DELETE /api/karyawan/{id}
```

---

## Audit Log

```http
GET /api/tlog
```

---

## Export PDF

```http
GET /api/report/pdf
```

---

# Struktur Project

```txt
hr-fullstack/
├── app/
├── database/
│   ├── migrations/
│   └── sql/
│       └── trigger.sql
├── public/
│   └── assets/
├── resources/
│   └── views/
├── routes/
│   ├── api.php
│   └── web.php
```

---

# Catatan

* Project menggunakan JWT Authentication
* Semua API protected menggunakan token
* Audit log otomatis berjalan menggunakan database trigger
* Frontend menggunakan Blade + KaiAdmin Template
