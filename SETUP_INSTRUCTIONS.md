# 🚀 Instruksi Setup Portfolio

## 📋 Langkah-langkah Setup

### 1. Setup Environment File

Buat file `.env` di root project dan salin konfigurasi dari `mongodb-config.txt`:

```bash
# Salin isi dari mongodb-config.txt ke .env
cp mongodb-config.txt .env
```

### 2. Generate Application Key

```bash
php artisan key:generate
```

### 3. Install Dependencies

```bash
composer install
npm install
```

### 4. Compile Assets

```bash
npm run dev
```

### 5. Seed Database

```bash
php artisan db:seed
```

### 6. Jalankan Aplikasi

```bash
php artisan serve
```

## 🔧 Konfigurasi MongoDB

Pastikan konfigurasi MongoDB di `.env` sudah benar:

```env
DB_CONNECTION=mongodb
DB_HOST=100.96.165.28
DB_PORT=27017
DB_DATABASE=portfolio
DB_USERNAME=iqbal
DB_PASSWORD=iqbal
DB_AUTHENTICATION_DATABASE=admin
```

## 🌐 Akses Aplikasi

Setelah menjalankan `php artisan serve`, akses aplikasi di:

-   **URL**: http://localhost:8000
-   **Portfolio**: http://localhost:8000/portfolio/{id}

## 📁 Struktur Data

Aplikasi akan membuat 3 collection di MongoDB:

-   `portfolios` - Data proyek portfolio
-   `skills` - Data skill programming
-   `experiences` - Data pengalaman kerja

## 🎨 Customization

### Mengubah Data Portfolio

Edit file `database/seeders/PortfolioSeeder.php` dan jalankan:

```bash
php artisan db:seed
```

### Mengubah Tema

Edit file `resources/views/portfolio/index.blade.php`

### Menambah Fitur

1. Buat model baru di `app/Models/`
2. Buat controller di `app/Http/Controllers/`
3. Tambahkan route di `routes/web.php`
4. Buat view di `resources/views/`

## 🐛 Troubleshooting

### Error MongoDB Connection

-   Pastikan MongoDB server berjalan
-   Cek kredensial di `.env`
-   Pastikan IP address bisa diakses

### Error Seeder

-   Pastikan MongoDB terhubung
-   Cek log error di `storage/logs/laravel.log`

### Error Assets

-   Jalankan `npm run dev` atau `npm run build`
-   Pastikan Node.js terinstall

## 📞 Support

Jika ada masalah, cek:

1. Log Laravel di `storage/logs/laravel.log`
2. MongoDB connection
3. Environment variables

---

**Happy Coding! 😊**
