# Sistem Inventarisasi Barang

Aplikasi web untuk mengelola inventaris barang berbasis Laravel.
Dibangun sebagai proyek tugas Pemrograman Web Backend SMK.

## Fitur Utama
- Manajemen Barang (CRUD; Tambah, Tampil, Edit, Hapus)
- Manajemen Kategori Barang
- Upload foto barang
- Pagination data
- Validasi input

## Teknologi yang Digunakan
- PHP 8.1+
- Laravel 10.x
- MySQL 8.0
- Bootstrap 5
- Font Awesome 6

## Cara Instalasi

### 1. Clone Repository
```bash
git clone https://github.com
cd inventaris-barang
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Konfigurasi Environment
```bash
cp .env.example .env
php artisan key:generate
```

Edit file `.env`, sesuaikan konfigurasi database:
```env
DB_DATABASE=inventaris_db
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Buat Database dan Isi Data Awal
```bash
php artisan migrate:fresh --seed
```

### 5. Jalankan Aplikasi
```bash
php artisan serve
```

Buka browser: http://localhost:8000

## Struktur Database

### Tabel: categories

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT | Primary Key |
| name | VARCHAR(100) | Nama kategori |
| description | TEXT | Deskripsi (opsional) |

### Tabel: items

| Kolom | Tipe | Keterangan |
|---|---|---|
| id | BIGINT | Primary Key |
| category_id | BIGINT | FK ke categories |
| code | VARCHAR(50) | Kode unik barang |
| name | VARCHAR(200) | Nama barang |
| price | DECIMAL(15,2) | Harga |
| stock | INTEGER | Jumlah stok |
| unit | VARCHAR(50) | Satuan (pcs, kg, dll) |

## Akun Default (setelah seeder)
- Admin: admin@example.com / password

## Developer
- Nama: [Refi Dwi Tasari]
- Kelas: XI RPL
- Sekolah: [SMK Antartika 2 Sidoarjo]
- Tahun: 2026
-