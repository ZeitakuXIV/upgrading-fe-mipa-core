@extends('layouts.app')

@section('title', 'Films Collection - Exercise')

@section('content')
<!--
    🎬 HALAMAN FILM - VERSI LATIHAN RESPONSIF

    💡 PANDUAN PEMBELAJARAN:
    1. 📚 LIHAT REFERENSI: Buka /books di tab baru untuk melihat implementasi yang benar
    2. 📖 BACA DOCS: resources/views/books/index.blade.php memiliki annotations lengkap
    3. 🔧 PRAKTIK: Apply pola yang sama di halaman ini

    ⚠️ STATUS SAAT INI: Layout TIDAK responsif, hanya basic HTML
    🎯 TUGAS ANDA: Konversi ke mobile-first responsive design

    TARGET POLA RESPONSIF (SAMA SEPERTI BOOKS PAGE):
    - Mobile (< 768px): 1 kolom (grid-cols-1)
    - Tablet (768px+): 2 kolom (md:grid-cols-2)
    - Desktop (1024px+): 3 kolom (lg:grid-cols-3)

    📋 CHECKLIST LATIHAN:
    ✅ Step 1: Buka /books dan pelajari struktur responsive grid
    ⚠️ Step 2: Apply grid pattern yang sama di sini (TUGAS ANDA)
    ⚠️ Step 3: Test dengan browser DevTools responsive mode
    ⚠️ Step 4: Bandingkan hasil dengan Books page

    🔗 REFERENSI CEPAT:
    - Buka: http://127.0.0.1:8000/books (COPY pattern ini)
    - File: resources/views/books/index.blade.php (LIHAT annotations)
    - Docs: 04-responsive-with-tailwind.md (BACA teori)
-->

<!-- Header Dasar (perlu tipografi responsif) -->
<div class="mb-8">
    <!-- 💡 HINT: Lihat Books page, bagaimana h1 menggunakan text-2xl lg:text-4xl -->
    <!-- 📖 REFERENSI: /books line ~55 di resources/views/books/index.blade.php -->

    <!-- ⚠️ TODO: [LATIHAN STEP 1] Buat tipografi responsif -->
    <!-- Current: Fixed text-3xl (TIDAK responsif) -->
    <!-- Target: text-2xl lg:text-4xl (kecil di mobile, besar di desktop) -->
    <!-- 🔗 COPY dari Books: <h1 class="text-2xl lg:text-4xl font-bold text-base-content mb-2"> -->
    <h1 class="text-3xl font-bold text-base-content mb-2">
        🎬 Koleksi Film
    </h1>

    <!-- ⚠️ TODO: [LATIHAN STEP 2] Buat deskripsi teks responsif -->
    <!-- Current: Fixed text-base (TIDAK responsif) -->
    <!-- Target: text-sm lg:text-lg -->
    <!-- 🔗 COPY dari Books: class="text-sm lg:text-lg text-base-content/70 mb-4" -->
    <p class="text-base text-base-content/70 mb-4">
        <span class="badge badge-warning badge-sm mr-2">⚠️ VERSI LATIHAN</span>
        Layout ini perlu dibuat responsif. Tugas Anda!
    </p>

    <!-- Instruksi Latihan dengan Referensi Langsung -->
    <div class="alert alert-warning mb-6">
        <i class="fas fa-wrench"></i>
        <div>
            <h3 class="font-bold">🎯 Misi Anda:</h3>
            <ul class="text-sm mt-2 space-y-2">
                <li>� <strong>LANGKAH 0:</strong>
                    <a href="/books" target="_blank" class="link link-primary">Buka halaman Books</a>
                    di tab baru sebagai referensi
                </li>
                <li>📱 <strong>LANGKAH 1:</strong> Copy pattern grid responsif (1→2→3 kolom) dari Books</li>
                <li>📝 <strong>LANGKAH 2:</strong> Apply responsive typography scaling dari contoh</li>
                <li>📏 <strong>LANGKAH 3:</strong> Implementasi responsive spacing seperti Books</li>
                <li>🎯 <strong>TUJUAN:</strong> Cocokkan perilaku responsif halaman Books</li>
            </ul>

            <!-- Quick Reference Links -->
            <div class="mt-4 p-3 bg-base-200 rounded">
                <p class="font-semibold text-xs mb-2">🔗 REFERENSI CEPAT:</p>
                <div class="flex flex-wrap gap-2">
                    <a href="/books" target="_blank" class="btn btn-xs btn-primary">📚 Books Page</a>
                    <button onclick="showCodeReference()" class="btn btn-xs btn-secondary">📖 Code Reference</button>
                    <button onclick="showHints()" class="btn btn-xs btn-accent">💡 Hints</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ⚠️ TODO: [LATIHAN STEP 3] Buat stats grid responsif -->
<!-- 🔗 REFERENSI BOOKS: Lihat baris ~94 di Books page -->
<!-- Current: Basic flex layout (TIDAK responsif) -->
<!-- Target: grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 -->
<!-- 💡 HINT: Copy exact pattern dari Books statistics section -->

<!-- ❌ LAYOUT YANG SALAH (NON-RESPONSIF): -->
<div class="flex mb-8">
    <div class="stat bg-primary text-primary-content rounded-lg mr-4">
        <div class="stat-figure">
            <i class="fas fa-film text-2xl opacity-80"></i>
        </div>
        <div class="stat-title text-primary-content/80">Total Film</div>
        <div class="stat-value">{{ $films->count() }}</div>
        <div class="stat-desc text-primary-content/60">Dalam koleksi</div>
    </div>

    <!-- 📝 TODO: Tambah lebih banyak stat cards dan buat responsif -->
    <!-- 🔗 COPY pattern dari Books: Authors, Genres, Latest Year cards -->
    <div class="stat bg-secondary text-secondary-content rounded-lg mr-4">
        <div class="stat-figure">
            <i class="fas fa-users text-2xl opacity-80"></i>
        </div>
        <div class="stat-title text-secondary-content/80">Sutradara</div>
        <div class="stat-value">{{ $films->pluck('director')->unique()->count() }}</div>
        <div class="stat-desc text-secondary-content/60">Sutradara unik</div>
    </div>
</div>

<!-- 💡 PETUNJUK UNTUK SECTION INI:
     1. Ganti <div class="flex mb-8"> dengan <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
     2. Hapus mr-4 dari setiap stat card
     3. Tambah 2 stat cards lagi (Genre, Tahun Terbaru) seperti di Books
-->

<!-- Tombol Aksi (perlu layout responsif) -->
<!-- ⚠️ TODO: [LATIHAN STEP 4] Buat layout tombol responsif -->
<!-- 🔗 REFERENSI BOOKS: Lihat baris ~175 di Books page -->
<!-- Current: Basic flex (TIDAK responsif) -->
<!-- Target: flex flex-col sm:flex-row gap-4 -->
<!-- 💡 HINT: flex-col menumpuk vertikal di mobile, sm:flex-row horizontal di layar lebih besar -->

<!-- ❌ LAYOUT YANG SALAH (NON-RESPONSIF): -->
<div class="flex gap-4 mb-8">
    <a href="{{ route('films.create') }}" class="btn btn-primary">
        <i class="fas fa-plus mr-2"></i>
        Tambah Film Baru
    </a>

    <button class="btn btn-outline" onclick="showExerciseHints()">
        <i class="fas fa-question-circle mr-2"></i>
        Butuh Petunjuk?
    </button>
    <a href="/books" class="btn btn-success" target="_blank">
        <i class="fas fa-eye mr-2"></i>
        Lihat Referensi (Books)
    </a>
</div>

<!-- 💡 PETUNJUK UNTUK SECTION INI:
     Ganti <div class="flex gap-4 mb-8"> dengan <div class="flex flex-col sm:flex-row gap-4 mb-8">
-->

<!-- 🚨 AREA LATIHAN UTAMA - INI YANG HARUS ANDA UBAH! 🚨 -->
<!-- ⚠️ TODO: [LATIHAN STEP 5 - PALING PENTING] KONVERSI KE RESPONSIVE GRID -->

<!--
    🎯 MISI UTAMA ANDA:
    1. 📚 BUKA: /books di browser → lihat bagian "Grid Buku"
    2. 🔍 PERHATIKAN: Bagaimana grid berubah saat resize browser
    3. 📋 COPY: Pattern grid responsif yang sama
    4. ✅ APPLY: Di section ini

    🔗 REFERENSI LANGSUNG:
    - Books page baris ~240: <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    - Card structure: <div class="card bg-base-100 shadow-lg hover:shadow-xl...">
    - Content layout: stat-figure, card-body, card-actions pattern
-->

<!-- ❌ LAYOUT SAAT INI (SALAH - NON-RESPONSIF): -->
<div class="alert alert-error mb-4">
    <i class="fas fa-exclamation-triangle"></i>
    <div>
        <h4 class="font-bold">⚠️ AREA YANG PERLU DIPERBAIKI</h4>
        <p class="text-sm">Layout di bawah ini menggunakan <code>flex</code> biasa yang TIDAK responsif.</p>
        <p class="text-sm"><strong>Tugas Anda:</strong> Ganti dengan pattern grid responsif dari Books page!</p>
    </div>
</div>

<!-- 🔥 INI YANG PERLU ANDA GANTI: -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($films as $film)
        <div class="card bg-base-100 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-base-300">
            <div class="card-body p-4 lg:p-6">
                <h2 class="card-title text-base lg:text-lg font-bold mb-1">{{ $film->title }}</h2>
                <p class="text-sm lg:text-base text-base-content/80 mb-1">Sutradara: {{ $film->director }}</p>
                @if($film->release_year)
                    <p class="text-xs text-base-content/60 mb-1">{{ $film->release_year }}</p>
                @endif
                @if($film->genre)
                    <span class="badge badge-info badge-sm mb-2">{{ $film->genre }}</span>
                @endif
                @if($film->description)
                    <p class="text-sm mt-2">{{ $film->description }}</p>
                @endif
                @if($film->duration)
                    <p class="text-xs text-base-content/50 mt-2">{{ $film->duration }} menit</p>
                @endif
                <div class="card-actions mt-4 flex gap-2">
                    <button class="btn btn-primary btn-sm">Lihat</button>
                    <button class="btn btn-outline btn-sm">Edit</button>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- 💡 TEMPLATE SOLUSI (untuk copy-paste setelah Anda belajar dari Books) -->
<div class="mt-8 p-4 bg-base-200 rounded-lg">
    <h4 class="font-bold mb-2">💡 TEMPLATE SOLUSI (Salin setelah mempelajari Books page):</h4>
    <div class="mockup-code">
        <pre data-prefix="1"><code>&lt;div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"&gt;</code></pre>
        <pre data-prefix="2"><code>    @foreach($films as $film)</code></pre>
        <pre data-prefix="3"><code>        &lt;div class="card bg-base-100 shadow-lg hover:shadow-xl..."&gt;</code></pre>
        <pre data-prefix="4"><code>            &lt;!-- Copy card structure dari Books page --&gt;</code></pre>
        <pre data-prefix="5"><code>        &lt;/div&gt;</code></pre>
        <pre data-prefix="6"><code>    @endforeach</code></pre>
        <pre data-prefix="7"><code>&lt;/div&gt;</code></pre>
    </div>

    <div class="mt-4">
        <button onclick="showDetailedHints()" class="btn btn-sm btn-primary">📖 Lihat Petunjuk Detail</button>
        <button onclick="showBookComparison()" class="btn btn-sm btn-secondary">🔍 Bandingkan dengan Books</button>
    </div>
</div>

<!-- Empty State -->
@if($films->count() === 0)
    <div class="text-center py-16">
        <i class="fas fa-film text-6xl text-base-content/30 mb-4"></i>
        <h3 class="text-xl font-bold text-base-content/70 mb-2">No Films Found</h3>
        <p class="text-base-content/50 mb-6">Start your film collection!</p>
        <a href="{{ route('films.create') }}" class="btn btn-primary">
            <i class="fas fa-plus mr-2"></i>
            Add Your First Film
        </a>
    </div>
@endif

<!-- Exercise Hints Modal -->
<dialog id="exercise_modal" class="modal">
    <div class="modal-box max-w-4xl">
        <h3 class="font-bold text-lg mb-4">💡 Exercise Hints - Make Films Responsive</h3>

        <div class="space-y-6">
            <!-- Step 1 -->
            <div class="card bg-red-50 border border-red-200">
                <div class="card-body">
                    <h4 class="font-bold text-red-700">📱 Step 1: Fix the Grid Layout</h4>
                    <p class="text-sm text-red-600 mb-3">Current issue: <code>&lt;div class="flex"&gt;</code> creates horizontal overflow</p>

                    <div class="mockup-code text-xs">
                        <pre data-prefix="❌"><code>// BAD: Non-responsive flex</code></pre>
                        <pre data-prefix=""><code>&lt;div class="flex"&gt;</code></pre>
                        <pre data-prefix="✅"><code>// GOOD: Responsive grid</code></pre>
                        <pre data-prefix=""><code>&lt;div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"&gt;</code></pre>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="card bg-yellow-50 border border-yellow-200">
                <div class="card-body">
                    <h4 class="font-bold text-yellow-700">🎨 Step 2: Convert to DaisyUI Cards</h4>
                    <p class="text-sm text-yellow-600 mb-3">Replace basic divs with proper responsive cards</p>

                    <div class="mockup-code text-xs">
                        <pre data-prefix="❌"><code>&lt;div class="bg-white p-4 m-2 rounded shadow"&gt;</code></pre>
                        <pre data-prefix="✅"><code>&lt;div class="card bg-base-100 shadow-lg hover:shadow-xl transition-shadow"&gt;</code></pre>
                        <pre data-prefix=""><code>  &lt;div class="card-body p-4 lg:p-6"&gt;</code></pre>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="card bg-blue-50 border border-blue-200">
                <div class="card-body">
                    <h4 class="font-bold text-blue-700">📏 Step 3: Add Responsive Typography</h4>

                    <div class="mockup-code text-xs">
                        <pre data-prefix="❌"><code>&lt;h3 class="font-bold"&gt;{{ $film->title }}&lt;/h3&gt;</code></pre>
                        <pre data-prefix="✅"><code>&lt;h2 class="card-title text-base lg:text-lg font-bold"&gt;{{ $film->title }}&lt;/h2&gt;</code></pre>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="card bg-green-50 border border-green-200">
                <div class="card-body">
                    <h4 class="font-bold text-green-700">🎯 Step 4: Compare with Books Page</h4>
                    <p class="text-sm text-green-600">Study <code>/books</code> to see the complete responsive implementation</p>

                    <div class="flex gap-2 mt-3">
                        <a href="/books" class="btn btn-sm btn-success" target="_blank">
                            <i class="fas fa-external-link-alt mr-1"></i>
                            Open Books Reference
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-action">
            <button class="btn" onclick="document.getElementById('exercise_modal').close()">Tutup Petunjuk</button>
            <a href="/books" target="_blank" class="btn btn-primary">📚 Buka Books Reference</a>
        </div>
    </div>
</dialog>

<!-- Modal untuk Code Reference -->
<dialog id="code_reference_modal" class="modal">
    <div class="modal-box max-w-4xl">
        <h3 class="font-bold text-lg mb-4">📖 Referensi Kode dari Books Page</h3>

        <div class="space-y-4">
            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i>
                <div>
                    <h4 class="font-bold">🎯 Yang Harus Anda Copy:</h4>
                    <p class="text-sm">Struktur HTML dan class CSS yang sama persis dari Books page</p>
                </div>
            </div>

            <!-- Grid Pattern Reference -->
            <div class="card bg-base-200">
                <div class="card-body">
                    <h4 class="font-bold">1. 📐 Pattern Grid Responsif</h4>
                    <p class="text-sm mb-3">Dari Books page baris ~240:</p>
                    <div class="mockup-code text-sm">
                        <pre data-prefix="📚"><code>&lt;div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"&gt;</code></pre>
                        <pre data-prefix="💡"><code>  &lt;!-- 1 kolom mobile → 2 kolom tablet → 3 kolom desktop --&gt;</code></pre>
                    </div>
                </div>
            </div>

            <!-- Card Structure Reference -->
            <div class="card bg-base-200">
                <div class="card-body">
                    <h4 class="font-bold">2. 🎴 Struktur Card</h4>
                    <p class="text-sm mb-3">Card wrapper dengan hover effects:</p>
                    <div class="mockup-code text-sm">
                        <pre data-prefix="📚"><code>&lt;div class="card bg-base-100 shadow-lg hover:shadow-xl</code></pre>
                        <pre data-prefix="  "><code>     transition-shadow duration-300 border border-base-300"&gt;</code></pre>
                    </div>
                </div>
            </div>

            <!-- Typography Reference -->
            <div class="card bg-base-200">
                <div class="card-body">
                    <h4 class="font-bold">3. 📝 Tipografi Responsif</h4>
                    <div class="mockup-code text-sm">
                        <pre data-prefix="📚"><code>&lt;h2 class="card-title text-base lg:text-lg font-bold"&gt;</code></pre>
                        <pre data-prefix="📚"><code>&lt;p class="text-sm lg:text-base text-base-content/80"&gt;</code></pre>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-action">
            <button class="btn" onclick="document.getElementById('code_reference_modal').close()">Tutup</button>
        </div>
    </div>
</dialog>

<script>
// Fungsi untuk menampilkan hints latihan
function showExerciseHints() {
    document.getElementById('exercise_modal').showModal();
}

// Fungsi untuk menampilkan referensi kode
function showCodeReference() {
    document.getElementById('code_reference_modal').showModal();
}

// Fungsi untuk menampilkan hints detail
function showDetailedHints() {
    alert(`🎯 LANGKAH-LANGKAH DETAIL:

1. 📚 BUKA /books di tab baru
2. 🔍 INSPECT grid buku dengan DevTools
3. 📋 COPY class: "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"
4. 🔄 GANTI <div class="flex"> dengan pattern grid tersebut
5. 🎨 UPDATE card styling dengan DaisyUI classes
6. ✅ TEST responsive behavior dengan DevTools

💡 TIP: Lihat source code Books di resources/views/books/index.blade.php!`);
}

// Fungsi untuk membandingkan dengan Books
function showBookComparison() {
    const comparison = `🔍 PERBANDINGAN FILMS vs BOOKS:

❌ FILMS (Saat ini):
<div class="flex"> → Horizontal scroll, tidak responsif

✅ BOOKS (Target):
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

🎯 SOLUSI: Copy exact pattern dari Books page!`;

    console.log(comparison);
    alert('🔍 Perbandingan sudah di-log ke console. Tekan F12 untuk melihat detail!');
}

// Fungsi untuk show hints umum
function showHints() {
    showExerciseHints();
}

// Log deteksi masalah layout untuk pembelajaran
function checkLayoutIssues() {
    const flexContainer = document.querySelector('.flex.overflow-x-auto');
    if (flexContainer && flexContainer.scrollWidth > flexContainer.clientWidth) {
        console.warn('⚠️ Masalah Layout: Terdeteksi horizontal overflow! Gunakan grid responsif daripada flex.');
        console.log('💡 Solusi: Ganti dengan <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">');
    }

    // Log responsive information
    const width = window.innerWidth;
    let targetColumns = 1;
    let breakpoint = 'Mobile';

    if (width >= 1024) {
        targetColumns = 3;
        breakpoint = 'Desktop (lg)';
    } else if (width >= 768) {
        targetColumns = 2;
        breakpoint = 'Tablet (md)';
    }

    console.log(`📱 Layout seharusnya: ${targetColumns} kolom pada ${width}px (${breakpoint})`);
}

// Event listeners untuk feedback edukatif
window.addEventListener('resize', checkLayoutIssues);
checkLayoutIssues();

// Pesan pembelajaran otomatis
console.log('🎯 LATIHAN: Konversi layout non-responsif ini ke desain responsif mobile-first!');
console.log('📚 REFERENSI: Bandingkan dengan halaman /books untuk melihat implementasi target');
console.log('� TOOLS: Gunakan DevTools Responsive Mode (Ctrl+Shift+M) untuk testing');
console.log('💡 TIPS: Buka /books di tab baru dan inspect HTML structure untuk melihat pattern yang benar');
</script>
@endsection
