# Portfolio - Programmer Gabut yang Lagi Belajar

Portfolio website dengan tema programmer yang sedang belajar, dibuat menggunakan Laravel dan MongoDB.

## 🚀 Fitur

-   **Tema Unik**: Desain dengan tema "programmer gabut yang lagi belajar"
-   **Responsive Design**: Tampilan yang responsif untuk semua device
-   **MongoDB Integration**: Menggunakan MongoDB sebagai database
-   **Modern UI**: Interface yang modern dengan Tailwind CSS
-   **Animasi**: Efek animasi yang menarik
-   **Portfolio Management**: Sistem manajemen portfolio yang mudah

## 🛠️ Teknologi yang Digunakan

-   **Backend**: Laravel 12
-   **Database**: MongoDB
-   **Frontend**: Tailwind CSS, Alpine.js
-   **Icons**: Font Awesome
-   **Deployment**: Ready for deployment

## 📋 Prerequisites

Sebelum menjalankan aplikasi, pastikan Anda memiliki:

-   PHP 8.2 atau lebih tinggi
-   Composer
-   MongoDB
-   Node.js & NPM (untuk asset compilation)

## 🔧 Instalasi

1. **Clone repository**

    ```bash
    git clone <repository-url>
    cd portfolio
    ```

2. **Install dependencies**

    ```bash
    composer install
    npm install
    ```

3. **Setup environment**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Konfigurasi database MongoDB**
   Edit file `.env` dan sesuaikan konfigurasi MongoDB:

    ```env
    DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=portfolio
    DB_USERNAME=
    DB_PASSWORD=
    ```

5. **Seed database**

    ```bash
    php artisan db:seed
    ```

6. **Compile assets**

    ```bash
    npm run dev
    ```

7. **Jalankan aplikasi**
    ```bash
    php artisan serve
    ```

## 📁 Struktur Proyek

```
portfolio/
├── app/
│   ├── Http/Controllers/
│   │   └── PortfolioController.php
│   └── Models/
│       ├── Portfolio.php
│       ├── Skill.php
│       └── Experience.php
├── database/seeders/
│   └── PortfolioSeeder.php
├── resources/views/portfolio/
│   ├── index.blade.php
│   └── show.blade.php
└── routes/
    └── web.php
```

## 🎨 Customization

### Mengubah Data Portfolio

1. Edit file `database/seeders/PortfolioSeeder.php`
2. Jalankan `php artisan db:seed` untuk mengupdate data

### Mengubah Tema

1. Edit file `resources/views/portfolio/index.blade.php`
2. Sesuaikan warna, font, dan layout sesuai preferensi

### Menambah Fitur

1. Buat model baru di `app/Models/`
2. Buat controller di `app/Http/Controllers/`
3. Tambahkan route di `routes/web.php`
4. Buat view di `resources/views/`

## 🌟 Fitur Portfolio

### Sections yang Tersedia

1. **Header**: Introduction dengan animasi typing
2. **About**: Informasi tentang programmer
3. **Skills**: Daftar skill dengan progress bar
4. **Experience**: Pengalaman kerja/learning
5. **Projects**: Portfolio proyek-proyek
6. **Contact**: Informasi kontak

### Data yang Dikelola

-   **Portfolio Projects**: Proyek-proyek yang telah dibuat
-   **Skills**: Skill programming dengan level
-   **Experience**: Pengalaman kerja dan belajar

## 🚀 Deployment

### Heroku

1. Setup MongoDB Atlas
2. Deploy ke Heroku
3. Set environment variables

### Vercel

1. Setup MongoDB Atlas
2. Deploy ke Vercel
3. Configure environment variables

## 🤝 Contributing

1. Fork repository
2. Create feature branch
3. Commit changes
4. Push to branch
5. Create Pull Request

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 😊 About

Dibuat dengan ❤️ oleh programmer gabut yang lagi belajar coding.

**Motto**: "Keep coding, keep learning, and never stop being curious!"

---

_"Masih belajar coding, tapi udah berani bikin portfolio 😅"_
