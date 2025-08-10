Blade adalah **template engine bawaan Laravel** untuk membuat HTML dinamis.  
Dia punya **directive** (`@if`, `@foreach`, `@yield`, `@include`, dll) yang memudahkan logika di view tanpa nulis PHP murni.

---
## 1) Directive Dasar

### **@if / @elseif / @else / @endif**
Untuk **percabangan**.
```blade
@if($isLoggedIn)
  <p>Selamat datang, {{ $username }}</p>
@else
  <p>Silakan login.</p>
@endif
```

---
### **@foreach / @endforeach**
Untuk **perulangan**.
```blade
@foreach($links as $link)
  <a href="{{ $link['url'] }}">{{ $link['label'] }}</a>
@endforeach
```

---
### **@isset / @endisset**
Menampilkan jika variabel **ada & tidak null**.
```blade
@isset($footerText)
  <p>{{ $footerText }}</p>
@endisset
```

---
## 2) @yield vs @include

### **@yield**
- Dipakai di *layout utama* untuk membuat **slot kosong** yang akan diisi oleh view turunan.
- Biasanya di `layouts/app.blade.php`.

Contoh `layouts/app.blade.php`:
```blade
<html>
  <body>
    @include('partials.navbar')
    <main class="p-4">
      @yield('content') <!-- Slot kosong -->
    </main>
    @include('partials.footer')
  </body>
</html>
```

Contoh view turunan `home.blade.php`:
```blade
@extends('layouts.app')

@section('content')
  <h1>Halaman Utama</h1>
@endsection
```

**Intinya:** `@yield` adalah *placeholder* yang diisi oleh `@section` di view turunan.

---
### **@include**
- Menyisipkan file Blade lain **langsung** di posisi tersebut.
- Tidak butuh `@section` / `@extends`.

Contoh:
```blade
@include('partials.navbar')
```
> Di sini, isi `partials/navbar.blade.php` langsung muncul di posisi pemanggilan.

**Perbedaan Utama:**

|              | @yield                               | @include                         |
| ------------ | ------------------------------------ | -------------------------------- |
| Fungsinya    | Placeholder untuk `@section`         | Menyisipkan view secara langsung |
| Kapan pakai? | Layout utama → halaman turunan       | Memanggil komponen UI berulang   |
| Ada data?    | Tidak langsung, diisi via `@section` | Bisa lempar data pakai parameter |

---
## 3) Studi Kasus: Navbar & Footer

**Navbar (`resources/views/partials/navbar.blade.php`)**
```blade
<nav class="navbar bg-base-100 shadow">
  <div class="flex-1">
    <a class="btn btn-ghost text-xl" href="{{ route('home') }}">MyApp</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
      @foreach($navLinks as $link)
        <li>
          <a href="{{ $link['url'] }}"
             class="{{ request()->url() === $link['url'] ? 'active font-bold' : '' }}">
            {{ $link['label'] }}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
</nav>
```

**Footer (`resources/views/partials/footer.blade.php`)**
```blade
<footer class="footer p-10 bg-base-200 text-base-content">
  <aside>
    <p>{{ $appName }}<br/>© {{ date('Y') }} All rights reserved</p>
  </aside>
  @isset($footerLinks)
    <nav>
      <header class="footer-title">Link Penting</header>
      @foreach($footerLinks as $link)
        <a class="link link-hover" href="{{ $link['url'] }}">{{ $link['label'] }}</a>
      @endforeach
    </nav>
  @endisset
</footer>
```

---

## 4) Tips
- Gunakan **@yield** untuk struktur besar/layout.
- Gunakan **@include** untuk komponen UI yang berulang.
- Pastikan data untuk `@include` dikirim dari controller atau *View Composer*.
- Hindari logika berat di Blade → olah data di controller.

📄 **Dokumentasi Blade:** https://laravel.com/docs/blade
