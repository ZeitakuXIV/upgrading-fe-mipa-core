# 05 – Responsive, Grid & Slicing

## Tujuan
- Memahami konsep responsive design.
- Menggunakan Tailwind responsive utilities.
- Mengatur layout dengan Flexbox dan Grid.
- Menerapkan teknik slicing dari desain ke kode.

---

## 1) Konsep Responsive Design
- Desain menyesuaikan ukuran layar (mobile, tablet, desktop).
- Prinsip mobile-first: mulai dari layar kecil, tambah aturan untuk layar lebih besar.
- Tailwind default-nya mobile-first.

---

## 2) Breakpoints Tailwind
Prefix: sm:, md:, lg:, xl:, 2xl: (sesuai konfigurasi default).

Contoh

```html
<p class="text-sm md:text-lg lg:text-xl">
  Teks ini akan membesar di layar lebih lebar.
</p>
```
---

## 3) Flexbox di Tailwind
Gunakan untuk layout satu dimensi (row/column).

```html
<div class="flex gap-4">
  <div class="bg-blue-200 p-4 flex-1">Box 1</div>
  <div class="bg-blue-400 p-4 flex-1">Box 2</div>
</div>
```

Catatan:
- class flex mengaktifkan flexbox.
- class gap-4 memberi jarak antar item.
- class flex-1 membagi ruang sama rata.

---

## 4) Grid di Tailwind
Gunakan untuk layout dua dimensi (baris dan kolom).

```html
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
  <div class="bg-green-200 p-4">Box 1</div>
  <div class="bg-green-400 p-4">Box 2</div>
  <div class="bg-green-600 p-4">Box 3</div>
</div>
```
Catatan:
- grid-cols-1 = satu kolom (mobile).
- md:grid-cols-3 = tiga kolom saat lebar layar ≥ 768px.

---

## 5) Responsive Table (contoh halaman buku)
```blade
<div class="overflow-x-auto">
  <table class="min-w-full border border-gray-200 rounded-md">
    <thead class="bg-gray-100">
      <tr>
        <th class="px-4 py-2 text-left">Judul</th>
        <th class="px-4 py-2 text-left">Penulis</th>
        <th class="px-4 py-2 text-left">Tahun</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
      <tr class="hover:bg-gray-50">
        <td class="px-4 py-2">Contoh Buku</td>
        <td class="px-4 py-2">Penulis A</td>
        <td class="px-4 py-2">2024</td>
      </tr>
    </tbody>
  </table>
</div>
```

Kunci: bungkus tabel dengan overflow-x-auto agar tidak pecah di mobile.

---

## 6) Teknik Slicing: langkah praktis
1. Analisis layout di desain (header, hero, konten, footer).
2. Pecah jadi section semantik: header, main, section, footer.
3. Tentukan sistem layout: flex atau grid.
4. Tambahkan style dasar: spacing (p-, m-, gap-), warna, tipografi.
5. Tambahkan aturan responsif dengan prefix sm:, md:, lg:, dst.
6. Uji di DevTools (toggle device toolbar) di beberapa ukuran.

---

## 7) Contoh Slicing Card Layout

```html
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4 max-w-6xl mx-auto">
  <article class="bg-white border rounded-lg p-4 shadow transition hover:shadow-lg">
    <h2 class="text-lg font-bold">Judul Buku</h2>
    <p class="text-gray-600">Penulis A</p>
    <span class="text-sm text-gray-500">2024</span>
  </article>
  <!-- Card lain -->
</div>
```

---

## 8) Tips Responsif
- Mulai dari mobile view, kemudian perluas ke layar besar.
- Lebih baik gunakan gap daripada margin antar kartu/kolom.
- Batasi lebar konten besar dengan max-w-4xl/5xl/6xl dan mx-auto.
- Jaga konsistensi scale spacing dan warna agar mudah dirawat.
