## 🎯 Tujuan

- Memahami alur dasar Laravel dari URL sampai halaman tampil.
    
- Membuat route sederhana.
    
- Menghubungkan route ke controller dan menampilkan view.
    

---

## 🔄 Alur Dasar

```
Browser (URL) → Route → Controller → View (Blade) → Tampil di Browser
```

**Analogi:**

- Route = resepsionis yang mengarahkan pengunjung.
    
- Controller = dapur yang menyiapkan pesanan.
    
- View = piring yang menyajikan makanan ke meja.
    

---

## 1️⃣ Routing Sederhana

File: `routes/web.php`

```php
Route::get('/', function () {
    return 'Halo Dunia!';
});
```

- `Route::get()` → menangani request **GET**.
- Closure (function) langsung mengembalikan teks.

---

## 2️⃣ Routing ke View Langsung

```php
Route::get('/about', function () {
    return view('about');
});
```

- Mencari file `resources/views/about.blade.php`.

`resources/views/about.blade.php`:

```blade
<h1>Tentang Kami</h1>
<p>Website ini dibuat untuk belajar Laravel.</p>
```

---

## 3️⃣ Routing ke Controller

Buat controller:

```bash
php artisan make:controller BookController
```

File: `app/Http/Controllers/BookController.php`

```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index');
    }
}
```

Route:

```php
use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index']);
```

- URL `/books` akan memanggil method `index()` di `BookController`.
    

---

## 4️⃣ View dari Controller

Buat folder `resources/views/books/` lalu file `index.blade.php`:

```blade
<h1>Daftar Buku</h1>
<p>Ini halaman daftar buku.</p>
```

---

## 5️⃣ Flow yang Terjadi

1. **User** buka `/books` di browser.
    
2. **Route** (`web.php`) mengarahkan request ke `BookController@index`.
    
3. **Controller** menjalankan `return view(...)`.
    
4. **View** (Blade) dirender jadi HTML.
    
5. **Browser** menampilkan halaman.
    

---

💡 **Catatan Penting:**

- Flow ini belum mengirim data dari controller ke view.
- Blade di tahap ini hanya dipakai untuk menulis HTML statis.
- Bahasan lebih lanjut bakal ada di **07-Blade Templating**
