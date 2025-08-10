## 🎯 Tujuan
- Memahami **DOM Event** di HTML/JavaScript.
- Mengetahui cara Livewire mengambil alih event handling tanpa JS manual.
- Menerapkan binding event untuk interaksi UI sederhana.

---

## A. Event di HTML + JavaScript

Di HTML murni, kalau mau tangani interaksi user, biasanya:
```html
<button onclick="alert('Buku disimpan!')">Simpan</button>
```
Atau lewat JS terpisah:
```html
<button id="saveBtn">Simpan</button>

<script>
  document.getElementById('saveBtn').addEventListener('click', () => {
    alert('Buku disimpan!');
  });
</script>
```
Masalahnya:
- Harus tulis JS terpisah.
- Kalau butuh update data di server, harus bikin AJAX/fetch manual.

---

## B. Livewire Menggantikan Event JS

Dengan Livewire, kita **ikat event langsung di Blade** tanpa JS manual.

**Contoh: Tombol Simpan**
```php
<!-- Blade -->
<button wire:click="save" class="btn btn-primary">Simpan</button>
```
**Komponen Livewire**
```php
public function save()
{
    // Simpan buku ke DB
    // ...
    session()->flash('message', 'Buku berhasil disimpan!');
}
```
> `wire:click="save"` = ketika tombol diklik, panggil method `save()` di komponen Livewire.

---

## C. Event Input Form

HTML biasa:
```html
<input type="text" oninput="console.log(this.value)">
```

Livewire:
```php
<input type="text" wire:model="title">
```
- **Tanpa JS**: Value input langsung sinkron ke reactive variable `$title` di PHP.
- Bisa dipakai untuk validasi real-time atau filter data.

---

## D. Beberapa Binding Event di Livewire

| Event JS             | Livewire Directive        | Keterangan                              |
|----------------------|---------------------------|------------------------------------------|
| `click`              | `wire:click="method"`     | Panggil method ketika klik               |
| `input`              | `wire:model="var"`        | Sinkronisasi input                       |
| `change`             | `wire:change="method"`    | Panggil method saat nilai berubah        |
| `keydown.enter`      | `wire:keydown.enter="go"` | Tangani tombol Enter                     |
| `submit`             | `wire:submit.prevent="save"` | Form submit tanpa reload              |

---

## E. Contoh Praktis: Search Buku Real-Time

**Blade**
```php
<div>
  <input type="text" wire:model="keyword" placeholder="Cari buku..." class="input input-bordered" />

  <ul>
    @foreach($books as $b)
      <li>{{ $b->title }} - {{ $b->author }}</li>
    @endforeach
  </ul>
</div>
```

**Livewire Component**
```php
public $keyword = '';

public function getBooksProperty()
{
    return Book::where('title', 'like', "%{$this->keyword}%")->get();
}
```
- **Tanpa** fetch API atau JS manual → pencarian langsung update saat user mengetik.

---

## F. Kenapa Ini Penting?
- Mengurangi **JavaScript boilerplate**.
- Semua logic tetap di **PHP (backend)**.
- Data binding otomatis bikin UI selalu konsisten dengan data server.

---

**Referensi:**
- Livewire Events: https://livewire.laravel.com/docs/events
- Livewire Actions: https://livewire.laravel.com/docs/actions
