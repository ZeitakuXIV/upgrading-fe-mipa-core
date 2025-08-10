# 04 – HTML Elements & Basic Tailwind CSS

## 🎯 Tujuan

- Mengenal HTML elements yang umum dipakai.
    
- Mampu memberi style dasar menggunakan Tailwind CSS.
    
- Menerapkan style di Blade view.
    

---

## 📍 1. HTML Elements Dasar

HTML menyediakan **elemen bawaan** untuk struktur halaman:

|Elemen|Fungsi|
|---|---|
|`<h1>`–`<h6>`|Judul / heading (h1 paling besar)|
|`<p>`|Paragraf teks|
|`<a>`|Hyperlink|
|`<img>`|Menampilkan gambar|
|`<ul> / <ol>`|List (unordered / ordered)|
|`<table>`|Tabel|
|`<form>`|Form input|
|`<button>`|Tombol|
|`<div>`|Pembungkus konten (block)|
|`<span>`|Pembungkus teks (inline)|

💡 **Tips:** Gunakan elemen sesuai fungsinya (_semantic HTML_) untuk aksesibilitas dan SEO.

---

## 📍 2. Tailwind CSS – Utility First

Tailwind menggunakan **class** langsung di HTML untuk styling.

### Contoh Struktur Dasar

```blade
<h1 class="text-2xl font-bold text-blue-600">Judul Halaman</h1>
<p class="text-gray-700 mt-2">Ini adalah paragraf.</p>
<a href="#" class="text-white bg-blue-500 px-4 py-2 rounded">Tombol</a>
```

**Penjelasan class:**

- `text-2xl` → ukuran teks besar.
    
- `font-bold` → tebal.
    
- `text-blue-600` → warna teks biru.
    
- `bg-blue-500` → warna background biru.
    
- `px-4 py-2` → padding horizontal & vertikal.
    
- `rounded` → sudut membulat.
    
- `mt-2` → margin top kecil.
    
- `text-gray-700` → warna teks abu.
    

---

## 📍 3. Contoh di Blade View

Misal kita ubah `books/index.blade.php` jadi lebih rapi:

```blade
@extends('layouts.main')

@section('content')
  <section class="p-4">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Daftar Buku</h1>

    <table class="min-w-full border border-gray-300">
      <thead class="bg-gray-100">
        <tr>
          <th class="px-4 py-2 text-left">ID</th>
          <th class="px-4 py-2 text-left">Judul</th>
          <th class="px-4 py-2 text-left">Penulis</th>
          <th class="px-4 py-2 text-left">Tahun</th>
          <th class="px-4 py-2 text-left">Dibuat</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-t hover:bg-gray-50">
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">Contoh Buku</td>
          <td class="px-4 py-2">Penulis A</td>
          <td class="px-4 py-2">2024</td>
          <td class="px-4 py-2">10 Agu 2025</td>
        </tr>
      </tbody>
    </table>
  </section>
@endsection
```

---

## 📍 4. Tailwind Class yang Wajib Dikenal

- **Teks & Font:**  
    `text-sm`, `text-lg`, `font-bold`, `font-semibold`, `italic`
    
- **Warna:**  
    `text-gray-800`, `bg-blue-500`, `bg-green-500`
    
- **Spacing:**  
    `p-4`, `px-2`, `py-3`, `m-4`, `mt-2`, `mb-6`
    
- **Border:**  
    `border`, `border-gray-300`, `rounded`, `rounded-lg`
    
- **Layout:**  
    `flex`, `flex-col`, `justify-between`, `items-center`, `gap-4`
    
- **Table:**  
    `min-w-full`, `divide-y`, `hover:bg-gray-50`
    
- **Effect:**  
    `shadow`, `hover:shadow-lg`, `transition`, `duration-200`
    

---

## 📍 5. Tips Pemakaian

- Gunakan **utility class** secukupnya → jangan terlalu banyak di 1 elemen.
    
- Gunakan **extract component** Blade kalau markup mulai panjang.
    
- Konsisten dengan spacing & warna.
    
---
# 04 – HTML Elements & Basic Tailwind CSS

## 📍 6. Div Structure & Why It’s Important

### 🔹 Apa itu `<div>`?

- `<div>` adalah **container** atau pembungkus konten dalam HTML.
    
- Tidak memiliki makna semantik — hanya untuk **grouping** dan **layout**.
    
- Di Tailwind, `<div>` sering digunakan untuk:
    
    - Membungkus elemen agar bisa diberi **padding/margin** bersama.
        
    - Membuat **layout** (grid, flex).
        
    - Mengatur background atau border untuk sekelompok elemen.
        

---

### 🔹 Kenapa penting?

1. **Mengatur Layout**
    
    - Membantu memisahkan bagian halaman (header, main, sidebar, footer).
        
    - Mempermudah pengaturan posisi elemen dengan `flex` atau `grid`.
        
2. **Membuat Grup Styling**
    
    - Misal: semua elemen di dalam punya background yang sama.
        
    
    ```blade
    <div class="bg-gray-100 p-4 rounded-lg">
        <h2 class="text-lg font-bold">Judul</h2>
        <p>Konten deskripsi...</p>
    </div>
    ```
    
3. **Mempermudah Responsiveness**
    
    - Dengan `<div>` pembungkus, kita bisa lebih mudah membuat layout berubah di ukuran layar berbeda.
        

---

### 🔹 Best Practice

- Gunakan `<div>` **hanya jika diperlukan** untuk layout atau styling.
    
- Kalau ada elemen semantik yang cocok (`<header>`, `<main>`, `<section>`, `<article>`, `<nav>`), gunakan itu **lebih dulu**.
    
- Hindari **div soup**:  
    ❌
    
    ```html
    <div>
      <div>
        <div>
          <p>Text</p>
        </div>
      </div>
    </div>
    ```
    
    ✔️
    
    ```html
    <section class="p-4">
      <p>Text</p>
    </section>
    ```
    

---

### 🔹 Contoh Struktur Div yang Baik

```blade
<div class="max-w-4xl mx-auto p-6">
    <header class="mb-6">
        <h1 class="text-2xl font-bold">Daftar Buku</h1>
    </header>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-200">
            <!-- isi tabel -->
        </table>
    </div>
</div>
```

- `max-w-4xl mx-auto` → center & batasi lebar konten.
    
- `header` → area judul.
    
- `<div>` pembungkus tabel → agar bisa diberi `overflow-x-auto`.