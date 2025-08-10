# 02 – HTML, CSS, dan JS — Pengenalan

## 🎯 Tujuan

- Memahami **peran** HTML, CSS, dan JavaScript di sebuah website.
    
- Mengerti analogi sederhana yang mudah diingat.
    
- Mengenal struktur dasar file HTML.
    

---

## 📌 Peran & Analogi

|Teknologi|Peran di Website|Analogi Kehidupan Nyata|
|---|---|---|
|**HTML**|Menentukan **struktur** & konten|Rangka bangunan|
|**CSS**|Mengatur **tampilan** & gaya|Cat, dekorasi, interior|
|**JS**|Menambahkan **interaktivitas**|Listrik & mesin otomatis|

💡 **Ingat:** Tanpa HTML → nggak ada kerangka,  
Tanpa CSS → kerangka ada tapi jelek,  
Tanpa JS → semua statis, nggak bisa berinteraksi.

---

## 🧱 Struktur Dasar HTML

```html
<!DOCTYPE html>
<html>
<head>
    <title>Judul Halaman</title>
</head>
<body>
    <h1>Halo Dunia!</h1>
    <p>Ini adalah paragraf.</p>
</body>
</html>
```

- **`<h1>`** sampai `<h6>`: heading/judul.
    
- **`<p>`**: paragraf teks.
    
- **`<a>`**: hyperlink.
    
- **`<img>`**: gambar.
    

---

## 🎨 Contoh CSS Sederhana

```css
h1 {
    color: blue;
    font-size: 24px;
}
```

- CSS terdiri dari **selector** → **property** → **value**.
    
- Disimpan di file `.css` atau langsung di `<style>`.
    

---

## ⚡ Contoh JavaScript Sederhana

```html
<button onclick="alert('Halo!')">Klik Saya</button>
```

- `onclick` memanggil fungsi saat tombol diklik.
    
- JavaScript bisa dimasukkan lewat `<script>` atau file `.js`.
    

---

## 📂 Hubungan Ketiganya

1. HTML bikin kerangka.
    
2. CSS bikin tampilan.
    
3. JS bikin interaksi.
    

Diagram sederhana:

```
HTML → CSS → JS
```

💬 Bayangkan: **Rumah (HTML)**, **dicat & diberi dekorasi (CSS)**, lalu **dipasang lampu otomatis (JS)**.
