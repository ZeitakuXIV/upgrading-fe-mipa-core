# 06 – UI Component (DaisyUI)

## Tujuan
- Memahami apa itu DaisyUI dan cara menggunakannya.
- Menggunakan komponen siap pakai untuk mempercepat pembuatan UI.
- Menyesuaikan tema DaisyUI.

---

## 1) Apa itu DaisyUI
DaisyUI adalah plugin Tailwind CSS yang menyediakan kumpulan komponen siap pakai seperti button, card, navbar, modal, dll.

---

## 2) Instalasi DaisyUI
Pastikan Tailwind sudah terpasang.

```bash
npm install daisyui
```

Tambahkan di file `tailwind.config.js`:

```js
module.exports = {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
}
```

---

## 3) Menggunakan Komponen

Saat ini kita **tidak hanya menggunakan styling default** dari DaisyUI, tapi juga sedang mencoba mengubah warna dan gaya komponen agar sesuai dengan identitas visual proyek.  
- Warna utama akan mengikuti tema yang kita set di `tailwind.config.js` atau langsung via class DaisyUI seperti `btn-primary`, `bg-secondary`, dll.  
- Jika diperlukan, kita bisa membuat **tema custom** DaisyUI sehingga warna tombol, card, dan elemen lainnya konsisten dengan branding (misal: warna BEM atau warna fakultas).  
- DaisyUI mendukung *theming* lewat `daisyui.themes` di konfigurasi Tailwind.

📄 Referensi Custom Theme: https://daisyui.com/docs/themes/

---

### Contoh **Button**:
```html
<button class="btn btn-primary">Simpan</button>
```
> `btn-primary` akan mengambil warna dari tema yang aktif.  
> Jika kita ganti tema atau override warna, semua tombol `btn-primary` otomatis mengikuti perubahan.

---

### Contoh **Card**:
```html
<div class="card w-96 bg-base-100 shadow-xl">
  <figure><img src="https://placehold.co/400x200" alt="Buku"/></figure>
  <div class="card-body">
    <h2 class="card-title">Judul Buku</h2>
    <p>Deskripsi singkat buku.</p>
    <div class="card-actions justify-end">
      <button class="btn btn-primary">Detail</button>
    </div>
  </div>
</div>
```
> Class `bg-base-100` akan menyesuaikan warna background dengan tema aktif.  
> Jika kita ubah `bg-base-100` jadi `bg-secondary`, warna card akan berubah sesuai palet tema.

---

## 4) Tema DaisyUI
DaisyUI punya tema bawaan seperti `light`, `dark`, `cupcake`, dll.

Mengubah tema di `tailwind.config.js`:

```js
module.exports = {
  // ...
  daisyui: {
    themes: ["light", "dark", "cupcake"],
  },
}
```

Atau langsung di HTML:

```html
<html data-theme="dark">
  ...
</html>
```

---

## 5) Tips Pemakaian
- Gunakan DaisyUI untuk mempercepat prototyping.
- Jangan lupa kombinasikan dengan Tailwind utility untuk modifikasi.
- Jangan terlalu bergantung, tetap pahami struktur HTML dan styling dasar.

---

## 6) Contoh Integrasi di Laravel Blade```blade
@extends('layouts.main')

@section('content')
<div class="p-4">
  <h1 class="text-2xl font-bold mb-4">Daftar Buku</h1>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    @foreach($items as $b)
      <div class="card bg-base-100 shadow-md">
        <div class="card-body">
          <h2 class="card-title">{{ $b['title'] }}</h2>
          <p>{{ $b['author'] }} ({{ $b['year'] }})</p>
          <div class="card-actions justify-end">
            <a href="{{ $b['route'] }}" class="btn btn-primary">Detail</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection```

## 📌 DaisyUI — Commonly Used Components

Berikut daftar komponen DaisyUI yang sering atau kemungkinan besar dipakai di proyek ini:

1. **Button** — Aksi utama seperti "Tambah Buku", "Edit", "Hapus"  
   📄 Docs: https://daisyui.com/components/button/

2. **Table** — Menampilkan daftar data (Books List)  
   📄 Docs: https://daisyui.com/components/table/

3. **Card** — Menampilkan detail buku atau item dalam bentuk kartu  
   📄 Docs: https://daisyui.com/components/card/

4. **Form (Input, Textarea, Select)** — Form tambah/edit buku  
   📄 Docs: https://daisyui.com/components/input/

5. **Modal** — Konfirmasi aksi (hapus buku) atau form popup  
   📄 Docs: https://daisyui.com/components/modal/

6. **Alert** — Menampilkan pesan sukses atau error  
   📄 Docs: https://daisyui.com/components/alert/

7. **Badge** — Menampilkan status singkat (misal: Tahun Terbit, Tag Kategori)  
   📄 Docs: https://daisyui.com/components/badge/

8. **Pagination** — Navigasi halaman daftar buku  
   📄 Docs: https://daisyui.com/components/pagination/ *(opsional, atau buat manual)*

9. **Navbar** — Navigasi utama aplikasi  
   📄 Docs: https://daisyui.com/components/navbar/

10. **Dropdown** — Menu aksi tambahan di setiap item  
    📄 Docs: https://daisyui.com/components/dropdown/
