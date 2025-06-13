# 🌐 Front End Website SIBI Reader

![Laravel](https://img.shields.io/badge/Built%20With-Laravel-red?style=for-the-badge&logo=laravel)
![Status](https://img.shields.io/badge/Status-In%20Development-blue?style=for-the-badge)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

## 🧠 Tentang Proyek

**SIBI Reader** adalah aplikasi web inovatif yang dirancang untuk membantu penyandang tunarungu berkomunikasi lebih mudah. Aplikasi ini menggunakan teknologi modern untuk **menerjemahkan gerakan isyarat tangan menjadi teks secara otomatis**. 

💡 Cukup gerakkan tangan di depan kamera, dan aplikasi akan mengubahnya menjadi tulisan yang bisa dibaca semua orang—**tanpa perangkat tambahan yang rumit**!

## 🚀 Fitur Utama

- ✋ Deteksi gerakan tangan (SIBI) secara real-time.
- 🔤 Terjemahan otomatis dari bahasa isyarat ke teks.
- 🎯 Antarmuka modern, responsif, dan mudah digunakan.
- ⚙️ Integrasi dengan backend FastAPI untuk prediksi gesture.

## 🛠️ Teknologi yang Digunakan

- **Frontend:** Laravel 12, Blade Template, Bootstrap 5, JavaScript
- **Backend:** FastAPI (proyek terpisah)
- **Database:** MySQL
- **Deploy:** Render

## 📁 Struktur Folder

```bash
├── app/
├── public/
├── resources/
│   ├── views/
│   └── js/
├── routes/
│   └── web.php
├── .env.production
├── package.json
├── README.md
```  
## 📦 Instalasi Lokal

### Clone repository
```  
git clone https://github.com/atalamahardika/SIBI-Frontend.git
cd SIBI-Frontend
```

### Install dependencies
```  
composer install
npm install
npm run build
```  

### Copy env dan generate key
```  
cp .env.example .env
php artisan key:generate
```  

### Jalankan server
```  
php artisan serve --port=8001
```

## 🤝 Kontribusi
Proyek ini dikembangkan sebagai bagian dari program Laskar AI 2024 dengan ID Tim: LAI25-SM016.

## 📬 Kontak
Jika Anda memiliki pertanyaan atau saran, silakan hubungi kami melalui halaman Hubungi Kami di website tersebut.
