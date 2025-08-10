## 🎯 Tujuan

- Menyiapkan **environment** untuk Laravel + Vite + Tailwind.
- Menginstall **XAMPP**, **Composer**, dan **Node.js** dari awal.
- Menjalankan project Laravel dengan hot reload.

---

## 1️⃣ Install XAMPP (PHP + MySQL + Apache)

> XAMPP adalah paket yang berisi PHP, MySQL, dan Apache dalam satu installer.

1. Download XAMPP:  
    [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)  
    Pilih versi **PHP 8.x**.
    
2. Install seperti biasa (Next → Next → Finish).
    
3. Buka **XAMPP Control Panel**, jalankan **Apache** dan **MySQL**.
    

💡 _Kenapa pakai XAMPP?_ → Memudahkan setup PHP & MySQL tanpa konfigurasi manual.

---

## 2️⃣ Install Composer

> Composer adalah package manager untuk PHP, digunakan untuk menginstall Laravel & dependency backend.

1. Download Composer:  
    [https://getcomposer.org/download/](https://getcomposer.org/download/)
    
2. Jalankan installer, pastikan **lokasi PHP** mengarah ke `xampp/php/php.exe`.
    
3. Setelah selesai, cek instalasi:
    

```bash
composer -v
```

Jika muncul versi, berarti sukses.

---

## 3️⃣ Install Node.js + npm

> Node.js digunakan untuk menjalankan Vite dan mengelola dependency frontend.

1. Download Node.js LTS:  
    [https://nodejs.org/en/download](https://nodejs.org/en/download)
    
2. Install seperti biasa.
    
3. Cek instalasi:
    

```bash
node -v
npm -v
```

---

## 4️⃣ Clone Project Laravel

> Project sudah ada di Git repository.

```bash
git clone <URL_PROJECT>
cd <NAMA_FOLDER_PROJECT>
```

---

## 5️⃣ Install Dependency Laravel

```bash
composer install
```

---

## 6️⃣ Install Dependency Frontend

```bash
npm install
```

---

## 7️⃣ Setup Environment Laravel

```bash
# Copy env file
cp .env.example .env     # kalo pake Mac/Linux
copy .env.example .env   # kalo pake Windows
# isi dari .env bakal dikasih nanti.

# Generate app key
php artisan key:generate
```

---

## 8️⃣ Jalankan Server Laravel

```bash
php artisan serve
# akses: http://127.0.0.1:8000
```

---

## 9️⃣ Jalankan Vite Dev Server

```bash
npm run dev
```

- Vite akan _compile_ asset dan _hot reload_ saat ada perubahan file.

---

## 📂 Struktur Folder Penting

```
project/
 ├─ resources/
 │  ├─ css/     # CSS/Tailwind
 │  ├─ js/      # JavaScript
 │  └─ views/   # Blade templates
 ├─ public/     # Aset publik
 └─ routes/web.php
```

---

## 🛠️ Troubleshooting

- **Port conflict (Apache tidak jalan)** → matikan aplikasi lain yang memakai port 80/443 (misal Skype).
    
- **npm error** → coba `rm -rf node_modules && npm install`.
    
- **asset tidak muncul** → pastikan ada:
    

```blade
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

di layout utama.

---

Kalau mau, aku bisa langsung bikin **versi “cheat sheet”** satu halaman untuk step ini biar peserta nggak bingung di tengah jalan.  
Mau aku bikin sekalian?