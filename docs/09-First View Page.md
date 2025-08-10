# 09 – First View Page (Checkpoint)

Tujuan:
- Menggabungkan semua yang sudah dipelajari (routing → controller → Blade layout → partials → Tailwind/DaisyUI).
- Membangun halaman **Books** sebagai referensi.
- Mengerjakan **Film** sebagai exercise dengan kontrak data serupa.

---

## A. Struktur Minimal yang Dipakai

```
resources/views/
├─ layouts/
│  └─ app.blade.php
├─ partials/
│  ├─ navbar.blade.php
│  └─ footer.blade.php
└─ books/
   ├─ index.blade.php
   └─ show.blade.php
```

---

## B. Layout & Partials (dipakai ulang)

**layouts/app.blade.php**
```php
<!doctype html>
<html lang="id" data-theme="light">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ $title ?? 'App' }}</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="min-h-screen bg-base-200">
  @include('partials.navbar')

  <main class="max-w-6xl mx-auto p-4">
    @yield('content')
  </main>

  @include('partials.footer')
</body>
</html>
```

**partials/navbar.blade.php**
```php
<nav class="navbar bg-base-100 shadow">
  <div class="flex-1">
    <a href="{{ route('home') }}" class="btn btn-ghost text-xl">MyApp</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal gap-2">
      @foreach($navLinks ?? [] as $link)
        <li>
          <a href="{{ $link['url'] }}"
             class="{{ url()->current() === $link['url'] ? 'font-bold underline' : '' }}">
            {{ $link['label'] }}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</nav>
```

**partials/footer.blade.php**
```php
<footer class="footer bg-base-300 text-base-content p-6 mt-8">
  <aside>
    <p>{{ $appName ?? 'MyApp' }} • © {{ date('Y') }}</p>
  </aside>
</footer>
```

---

## C. Books (Referensi)

### 1) Kontrak Data
List:
```
items[]: { id:int, title:string, author:string, year:int, route:string, added:string('d M Y') }
```
Detail:
```
book: { id:int, title:string, author:string, year:int, summary:string, added:string('d M Y') } | null
```

### 2) Routes
```php
use App\Http\Controllers\BookController;

Route::get('/', fn() => redirect()->route('books.index'))->name('home');
Route::get('/books', [BookController::class,'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class,'show'])->name('books.show');
```

### 3) Books List View
**resources/views/books/index.blade.php**
```php
@extends('layouts.app')

@section('content')
  <h1 class="text-2xl font-bold mb-4">Daftar Buku</h1>

  @if(empty($items))
    <div class="alert">Belum ada data buku.</div>
  @else
    <div class="overflow-x-auto">
      <table class="table w-full">
        <thead>
          <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Ditambah</th>
          </tr>
        </thead>
        <tbody class="divide-y">
          @foreach($items as $b)
            <tr class="hover">
              <td><a class="link link-primary" href="{{ $b['route'] }}">{{ $b['title'] }}</a></td>
              <td class="whitespace-nowrap">{{ $b['author'] }}</td>
              <td>{{ $b['year'] }}</td>
              <td class="whitespace-nowrap">{{ $b['added'] }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @endif
@endsection
```

### 4) Book Detail View
**resources/views/books/show.blade.php**
```php
@extends('layouts.app')

@section('content')
  <a href="{{ route('books.index') }}" class="btn btn-ghost mb-4">← Kembali</a>

  @isset($book)
    <article class="card bg-base-100 shadow">
      <div class="card-body">
        <h1 class="card-title text-2xl">{{ $book['title'] }}</h1>
        <p class="text-sm text-base-content/70">
          {{ $book['author'] }} • {{ $book['year'] }} • Ditambah {{ $book['added'] }}
        </p>
        <p class="mt-2">{{ $book['summary'] }}</p>
      </div>
    </article>
  @else
    <div class="alert alert-error">Buku tidak ditemukan.</div>
  @endisset
@endsection
```

---

## D. Exercise: Film (Kamu Kerjakan)

### 1) Target
Buat halaman **Film List** dan **Film Detail** dengan tampilan & kontrak data meniru Books.

### 2) Skema Data yang Dipakai di View
List:
```
items[]: { id:int, title:string, director:string, year:int, route:string, added:string('d M Y') }
```
Detail:
```
film: { id:int, title:string, director:string, year:int, summary:string, added:string('d M Y') } | null
```

### 3) Tugas
- Tambah routes:
```php
Route::get('/films', [FilmController::class,'index'])->name('films.index');
Route::get('/films/{id}', [FilmController::class,'show'])->name('films.show');
```
- Buat folder `resources/views/films/` dengan `index.php` & `show.php`.
- Implementasi UI:
  - List: table/card, responsive (`overflow-x-auto`, `max-w-*`, `grid` jika mau layout kartu).
  - Detail: card seperti Book Detail.
- Pakai `@yield`/`@include` sama seperti Books (navbar/footer tetap reuse).

### 4) Acceptance Criteria
- Navigasi dari navbar ke Books dan Films berfungsi.
- List tampil rapi di mobile (tidak overflow; tabel dibungkus, atau gunakan card grid).
- Link detail bekerja.
- Empty state muncul bila data kosong.
- Tidak ada pemanggilan Carbon/format tanggal di Blade (tanggal sudah diformat di controller/payload).

### 5) Bonus (opsional)
- Search bar (title/author/director).
- Badge tahun rilis (mis. “Baru” kalau ≥ 2022).

---

## E. Quick Checklist (Reviewer)
- Layout global memakai `@yield('content')`, navbar/footer via `@include`.
- Utility Tailwind/DaisyUI konsisten (spacing, warna).
- Tabel/daftar responsif: ada `overflow-x-auto` atau grid card.
- Tidak ada logic berat di Blade (format data sudah dari controller).
- A11y: heading hierarchy jelas, link punya teks yang bermakna.

---

Referensi:
- Blade: https://laravel.com/docs/blade  
- DaisyUI Components: https://daisyui.com/components/
