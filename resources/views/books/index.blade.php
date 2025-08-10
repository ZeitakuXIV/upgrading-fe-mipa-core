{{--
    📚 HALAMAN BUKU - IMPLEMENTASI REFERENSI LENGKAP DENGAN ANNOTATIONS

    rujukan: 07-Blade Templating.md (Sistem pewarisan Laravel Blade - direktif extends memungkinkan view anak mewarisi struktur layout dasar)
    PENJELASAN: Direktif extends memberitahu Laravel untuk menggunakan layout app.blade.php sebagai template induk. Ini menerapkan prinsip DRY dengan menggunakan kembali struktur HTML umum seperti navigasi, footer, dan elemen head di beberapa halaman. Konten anak akan dimasukkan ke bagian yield('content') dari layout induk.
--}}
@extends('layouts.app')

{{--
    rujukan: 07-Blade Templating.md (Direktif section untuk mendefinisikan blok konten - direktif section mendefinisikan blok konten bernama yang dapat di-yield di layout induk)
    PENJELASAN: Bagian title akan dimasukkan ke yield('title') di layout, memungkinkan judul halaman dinamis sambil mempertahankan struktur HTML yang konsisten. Ini sangat penting untuk SEO dan judul tab browser.
--}}
@section('title', 'Koleksi Buku - Referensi dengan Styling')

@section('content')
<!--
    📚 HALAMAN BUKU

    rujukan: 09-First View Page.md (Implementasi halaman responsif lengkap - halaman ini mendemonstrasikan prinsip desain responsif mobile-first dengan struktur HTML semantik yang tepat)
    PENJELASAN: Ini adalah implementasi referensi RESPONSIF PENUH yang harus dipelajari mahasiswa untuk memahami pola pengembangan frontend profesional. Setiap elemen dibuat dengan hati-hati untuk tujuan pembelajaran, menunjukkan cara membangun antarmuka modern, dapat diakses, dan ramah mobile.

    🎯 RANGKUMAN PEMBELAJARAN UTAMA:

    📱 RESPONSIF DESIGN (Mobile-First):
    - Mobile (< 768px): 1 kolom, text kecil, padding kompak
    - Tablet (768px+): 2 kolom, layout seimbang
    - Desktop (1024px+): 3-4 kolom, tipografi besar, spacing luas

    🎨 TAILWIND CSS + DAISYUI:
    - Utility-first approach dengan kelas seperti grid-cols-1, md:grid-cols-2, lg:grid-cols-3
    - Komponen DaisyUI: card, stat, badge, alert, modal, btn
    - Sistem warna semantik: primary, secondary, accent, base-content

    🔧 LARAVEL BLADE INTEGRATION:
    - Template inheritance: extends, section, yield
    - Data flow: Controller → Collection → View
    - Loops: foreach untuk menampilkan data dinamis
    - Output aman: (double kurung kurawal) untuk mencegah XSS

    📊 COLLECTION METHODS:
    - count(): Menghitung total items
    - pluck(): Mengekstrak field tertentu
    - unique(): Menghapus duplikat
    - max(): Mencari nilai maksimum

    ⚡ JAVASCRIPT INTERACTIVITY:
    - DOM manipulation untuk modal
    - Event listeners untuk responsive feedback
    - Console logging untuk debugging
    - Real-time breakpoint detection

    BREAKDOWN DESAIN RESPONSIF:
    rujukan: 04-responsive-with-tailwind.md (Metodologi responsif mobile-first - mulai dengan style dasar mobile lalu tingkatkan secara progresif untuk layar yang lebih besar)
    PENJELASAN:
    1. Bagian Header: Tipografi skala dari text-2xl mobile ke text-4xl desktop, layout flex berubah dari kolom ke baris
    2. Grid Statistik: Berkembang dari 1 kolom mobile ke 2 kolom tablet ke 4 kolom desktop menggunakan CSS Grid
    3. Grid Buku: Pola responsif canggih - 1 kolom mobile, 2 kolom tablet, 3 kolom desktop, 4 kolom desktop besar
    4. Komponen Kartu: Padding adaptif, penskalaan tipografi, efek hover, dan interaksi ramah sentuh

    TUJUAN PEMBELAJARAN:
    - Menguasai prinsip desain responsif mobile-first
    - Memahami pola CSS Grid responsif
    - Mempelajari penggunaan pustaka komponen DaisyUI
    - Mengimplementasikan pola antarmuka pengguna profesional
    - Berlatih sintaks templating Laravel Blade
-->

<!-- Header Halaman dengan Tipografi Responsif -->
<!--
    rujukan: 04-responsive-with-tailwind.md (Dasar-dasar container dan spacing responsif - kelas container menyediakan batasan max-width responsif)
    PENJELASAN: Pola container mx-auto memusatkan konten secara horizontal dan menyediakan max-width responsif pada berbagai breakpoint. px-4 py-8 memberikan padding konsisten yang bekerja di semua ukuran layar. Ini adalah pola layout fundamental dalam pengembangan web modern.
-->
<div class="mb-8">
    <!--
        rujukan: 06-UI Component (DaisyUI).md (Pola layout flexbox responsif - flex-col menumpuk item secara vertikal di mobile, lg:flex-row mengatur secara horizontal di desktop)
        PENJELASAN: Ini mendemonstrasikan desain responsif mobile-first. Default flex-col membuat tumpukan vertikal yang cocok untuk layar mobile sempit. Pada breakpoint lg (1024px+), berubah ke layout flex-row horizontal dengan spacing dan alignment yang tepat untuk tampilan desktop.
    -->
    <h1 class="text-2xl lg:text-4xl font-bold text-base-content mb-2">
        <!--
            rujukan: 04-responsive-with-tailwind.md (Penskalaan tipografi responsif - kelas ukuran teks yang beradaptasi dengan ukuran layar)
            PENJELASAN: text-2xl di mobile memberikan ukuran yang dapat dibaca tanpa membebani layar kecil. lg:text-4xl meningkat secara dramatis di desktop di mana ruang layar memungkinkan tipografi yang lebih besar dan berdampak. Ini menciptakan hierarki visual yang bekerja di berbagai perangkat.
        -->
        📚 Koleksi Buku
    </h1>

    <!--
        rujukan: 06-UI Component (DaisyUI).md (Sistem warna semantik DaisyUI - base-content menyediakan warna teks yang sadar tema)
        PENJELASAN: text-base-content/70 menggunakan sistem warna semantik DaisyUI dengan opacity 70%. Ini secara otomatis beradaptasi dengan tema terang/gelap dan memastikan rasio kontras yang tepat. Opacity menciptakan hierarki visual sambil mempertahankan standar aksesibilitas.
    -->
    <p class="text-sm lg:text-lg text-base-content/70 mb-4">
        <span class="badge badge-success badge-sm mr-2">✅ REFERENSI DENGAN STYLING</span>
        Ini adalah contoh yang sepenuhnya responsif. Pelajari pola implementasinya!
    </p>

    <!-- Alert Catatan Pembelajaran -->
    <!--
        rujukan: 06-UI Component (DaisyUI).md (Komponen Alert untuk pesan informasional - menyediakan styling konsisten untuk notifikasi pengguna)
        PENJELASAN: Komponen alert DaisyUI memberikan makna semantik melalui kode warna dan perlakuan visual yang konsisten. Varian alert-info menggunakan styling biru untuk menunjukkan konten informasional yang membantu pengguna memahami antarmuka.
    -->
    <div class="alert alert-info mb-6">
        <i class="fas fa-lightbulb"></i>
        <div>
            <h3 class="font-bold">Catatan Pembelajaran untuk Mahasiswa:</h3>
            <ul class="text-sm mt-2 space-y-1">
                <li>• <strong>Pendekatan mobile-first:</strong> Kelas dasar menargetkan mobile, kelas dengan prefix meningkatkan untuk layar lebih besar</li>
                <li>• <strong>Grid responsif:</strong> <code>grid-cols-1 md:grid-cols-2 lg:grid-cols-3</code> menciptakan progres kolom 1→2→3</li>
                <li>• <strong>Penskalaan tipografi:</strong> <code>text-sm lg:text-lg</code> memastikan keterbacaan di semua ukuran perangkat</li>
                <li>• <strong>Progres spacing:</strong> <code>p-4 lg:p-6</code> memberikan spacing lebih murah hati di layar yang lebih besar</li>
            </ul>
        </div>
    </div>
</div>

<!-- Kartu Statistik - Grid Responsif Canggih -->
<!--
    rujukan: 04-responsive-with-tailwind.md (Peningkatan grid responsif progresif - mendemonstrasikan progres grid kolom 1→2→4)
    PENJELASAN: Pola grid ini menampilkan desain responsif canggih. Dimulai dengan grid-cols-1 untuk mobile memastikan keterbacaan di layar kecil. md:grid-cols-2 pada 768px+ menciptakan layout seimbang untuk tablet. lg:grid-cols-4 pada 1024px+ memanfaatkan lebar desktop penuh secara efektif. gap-4 memberikan spacing konsisten di semua breakpoint.
-->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    <!--
        📊 BAGIAN PEMBELAJARAN STRUKTUR DATA CONTROLLER:
        rujukan: 03-Basic Routing, Controller, Blade.md (Alur data controller Laravel dan metode collection)
        PENJELASAN: Variabel books berasal dari method index BookController: books = Book::all(). Ini mengembalikan objek Laravel Collection dengan metode yang kuat:
        - count(): Mengembalikan total jumlah records
        - pluck('field'): Mengekstrak nilai field spesifik ke collection baru
        - unique(): Menghapus nilai duplikat dari collection
        - max('field'): Mengembalikan nilai tertinggi di field yang ditentukan

        VISUALISASI ALUR DATA:
        Route (/books) → BookController.index() → Book::all() → Blade View (variabel books) → Display
    -->

    <!-- Kartu Statistik Utama -->
    <!--
        rujukan: 06-UI Component (DaisyUI).md (Komponen Stats untuk visualisasi data - menyediakan styling konsisten untuk tampilan metrik kunci)
        PENJELASAN: Komponen stats DaisyUI menciptakan kartu data yang menarik secara visual dengan theming warna semantik. Kelas bg-primary dan text-primary-content memastikan kontras yang tepat dan kompatibilitas tema. Shadow-lg menambahkan kedalaman dan pemisahan visual.
    -->
    <div class="stat bg-primary text-primary-content rounded-lg">
        <div class="stat-figure">
            <!--
                rujukan: 02-HTML CSS JS.md (Ikon SVG untuk grafik yang dapat diskalakan - grafik vektor yang tetap tajam di semua ukuran)
                PENJELASAN: Ikon SVG lebih disukai daripada gambar bitmap karena mereka menskalakan dengan sempurna di semua kepadatan layar dan dapat di-styling dengan CSS. Kelas w-8 h-8 memastikan ukuran konsisten sementara currentColor mewarisi warna teks untuk kompatibilitas tema.
            -->
            <i class="fas fa-book text-2xl opacity-80"></i>
        </div>
        <div class="stat-title text-primary-content/80">Total Buku</div>
        <!--
            rujukan: 07-Blade Templating.md (Sintaks output data - kurung kurawal ganda untuk output HTML yang aman)
            PENJELASAN: Sintaks books count dengan aman mengeluarkan jumlah buku dari controller. Laravel secara otomatis meng-escape output ini untuk mencegah serangan XSS. Method count() adalah method Laravel Collection yang mengembalikan total jumlah item.
        -->
        <div class="stat-value text-2xl lg:text-3xl">{{ $books->count() }}</div>
        <div class="stat-desc text-primary-content/60">Dalam koleksi Anda</div>
    </div>

    <!-- Kartu Statistik Kedua -->
    <div class="stat bg-secondary text-secondary-content rounded-lg">
        <div class="stat-figure">
            <i class="fas fa-users text-2xl opacity-80"></i>
        </div>
        <div class="stat-title text-secondary-content/80">Penulis</div>
        <!--
            rujukan: 03-Basic Routing, Controller, Blade.md (Method chaining Laravel Collection untuk pemrosesan data)
            PENJELASAN: Ini mendemonstrasikan operasi Laravel Collection yang kuat:
            1. pluck('author') - Mengekstrak semua nilai 'author' ke collection baru
            2. unique() - Menghapus nama penulis duplikat
            3. count() - Menghitung penulis unik yang tersisa
            Rantai ini memproses data secara efisien tanpa query database tambahan.
        -->
        <div class="stat-value text-2xl lg:text-3xl">{{ $books->pluck('author')->unique()->count() }}</div>
        <div class="stat-desc text-secondary-content/60">Penulis unik</div>
    </div>

    <!-- Kartu Statistik Ketiga -->
    <div class="stat bg-accent text-accent-content rounded-lg">
        <div class="stat-figure">
            <i class="fas fa-tags text-2xl opacity-80"></i>
        </div>
        <div class="stat-title text-accent-content/80">Genre</div>
        <div class="stat-value text-2xl lg:text-3xl">{{ $books->pluck('genre')->unique()->count() }}</div>
        <div class="stat-desc text-accent-content/60">Kategori berbeda</div>
    </div>

    <!-- Kartu Statistik Keempat -->
    <div class="stat bg-neutral text-neutral-content rounded-lg">
        <div class="stat-figure">
            <i class="fas fa-calendar text-2xl opacity-80"></i>
        </div>
        <div class="stat-title text-neutral-content/80">Tahun Terbaru</div>
        <!--
            rujukan: 07-Blade Templating.md (Operator null coalescing untuk nilai fallback - mencegah error ketika data mungkin hilang)
            EXPLANATION: The ?? 'N/A' syntax provides a fallback value when max('publication_year') returns null. This prevents display issues and provides better user experience when data is incomplete.
        -->
        <div class="stat-value text-2xl lg:text-3xl">{{ $books->max('publication_year') ?? 'N/A' }}</div>
        <div class="stat-desc text-neutral-content/60">Most recent publication</div>
    </div>
</div>

<!-- Action Buttons with Responsive Layout -->
<!--
    refer: 04-responsive-with-tailwind.md (Responsive flexbox patterns for button layouts)
    EXPLANATION: flex-col stacks buttons vertically on mobile for easy touch interaction. sm:flex-row switches to horizontal layout on larger screens. Gap provides consistent spacing in both orientations.
-->
<div class="flex flex-col sm:flex-row gap-4 mb-8">
    <!--
        refer: 03-Basic Routing, Controller, Blade.md (Laravel named route helpers for URL generation)
        EXPLANATION: route('books.create') generates the correct URL for the create book page. This approach is preferred over hardcoded URLs because it automatically updates if route definitions change, making the application more maintainable.
    -->
    <a href="{{ route('books.create') }}" class="btn btn-primary">
        <i class="fas fa-plus mr-2"></i>
        Tambah Buku Baru
    </a>

    <!--
        rujukan: 02-HTML CSS JS.md (Panggilan fungsi JavaScript untuk elemen interaktif)
        PENJELASAN: Atribut onclick memanggil fungsi JavaScript untuk menampilkan informasi responsif. Ini mendemonstrasikan interaktivitas sisi-client dasar yang meningkatkan pengalaman pembelajaran.
    -->
    <button class="btn btn-outline" onclick="showResponsiveInfo()">
        <i class="fas fa-info-circle mr-2"></i>
        Tampilkan Breakdown Responsif
    </button>

    <a href="/films" class="btn btn-warning">
        <i class="fas fa-arrow-right mr-2"></i>
        Pergi ke Film (Versi Latihan)
    </a>
</div>

<!-- Grid Buku - BAGIAN PEMBELAJARAN RESPONSIF UTAMA -->
<!--
    🎯 MASTERCLASS GRID RESPONSIF:
    rujukan: 04-responsive-with-tailwind.md (Pola grid responsif canggih - pola inti yang harus dikuasai mahasiswa)

    BREAKDOWN KOMPREHENSIF:
    1. grid-cols-1 (Default/Mobile): Layout kolom tunggal untuk layar di bawah 768px
       - Mengoptimalkan untuk membaca dan interaksi mobile
       - Mencegah masalah scrolling horizontal
       - Memastikan target sentuh yang memadai

    2. md:grid-cols-2 (Tablet pada 768px+): Layout dua kolom untuk layar medium
       - Memanfaatkan lebar layar tablet secara efektif
       - Mempertahankan keterbacaan sambil menampilkan lebih banyak konten
       - Menyeimbangkan kepadatan informasi dengan kegunaan

    3. lg:grid-cols-3 (Desktop pada 1024px+): Layout tiga kolom untuk layar besar
       - Memanfaatkan real estate layar desktop
       - Menciptakan alignment grid yang menarik secara visual
       - Pola standar untuk layout bergaya dashboard

    4. gap-6: Spacing konsisten antara item grid di semua breakpoint
       - Memberikan pemisahan visual tanpa berlebihan
       - Skala yang sesuai di berbagai ukuran layar
       - Menciptakan tampilan profesional dan terorganisir

    PENJELASAN METODOLOGI MOBILE-FIRST:
    - Mulai dengan lingkungan yang paling terbatas (mobile)
    - Tingkatkan secara progresif untuk perangkat yang lebih mumpuni
    - Pastikan fungsionalitas inti bekerja di mana-mana
    - Tambahkan peningkatan yang memperbaiki pengalaman di layar yang lebih besar

    INSTRUKSI PENGUJIAN:
    Gunakan mode responsif DevTools browser:
    - 375px (iPhone): Harus menampilkan 1 kolom
    - 768px (iPad): Harus menampilkan 2 kolom
    - 1024px (Desktop): Harus menampilkan 3 kolom
    - Verifikasi tidak ada overflow horizontal di ukuran manapun
-->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!--
        rujukan: 07-Blade Templating.md (Direktif loop foreach untuk iterasi data)
        PENJELASAN: Direktif foreach melakukan loop melalui setiap buku dalam collection dari controller. Setiap iterasi memberikan akses ke properti buku individual seperti title, author, description, dll. Ini adalah cara utama untuk menampilkan data dinamis dari database dalam view Laravel.
    -->
    @foreach($books as $book)
        <!--
            refer: 06-UI Component (DaisyUI).md (Advanced card component with hover effects and animations)
            EXPLANATION: This card demonstrates professional UI patterns:
            - bg-base-100: Theme-aware background color
            - shadow-lg: Subtle depth that doesn't overwhelm
            - hover:shadow-xl: Interactive feedback on mouse over
            - transition-shadow duration-300: Smooth animation for better UX
            - border border-base-300: Subtle border that enhances card definition
        -->
        <div class="card bg-base-100 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-base-300">
            <!-- Card Image/Icon Section -->
            <!--
                refer: 06-UI Component (DaisyUI).md (Avatar placeholder component for consistent visual elements)
                EXPLANATION: When actual book cover images aren't available, placeholders maintain visual consistency. The avatar placeholder creates uniform sizing and styling across all cards while providing visual interest through color and iconography.
            -->
            <figure class="px-6 pt-6">
                <div class="avatar placeholder">
                    <div class="bg-primary text-primary-content rounded-xl w-16 h-16">
                        <i class="fas fa-book text-2xl"></i>
                    </div>
                </div>
            </figure>

            <!-- Card Content Body -->
            <!--
                refer: 04-responsive-with-tailwind.md (Responsive padding patterns for content spacing)
                EXPLANATION: p-4 lg:p-6 demonstrates responsive spacing. Compact padding on mobile conserves screen space, while generous padding on desktop creates comfortable reading experience. This pattern should be applied consistently across all content areas.
            -->
            <div class="card-body p-4 lg:p-6">
                <!-- Book Title and Genre -->
                <!--
                    refer: 06-UI Component (DaisyUI).md (Card title component with responsive typography)
                    EXPLANATION: card-title provides semantic meaning and consistent styling. text-base lg:text-lg scales typography appropriately. line-clamp-2 truncates long titles to maintain consistent card heights across the grid.
                -->
                <h2 class="card-title text-base lg:text-lg font-bold line-clamp-2">
                    {{ $book->title }}

                    <!-- Conditional Genre Badge -->
                    <!--
                        refer: 07-Blade Templating.md (Conditional rendering with if directive)
                        EXPLANATION: The if directive only renders content when the condition is true. This prevents empty badges from appearing when book genre data is missing, improving the overall visual presentation.
                    -->
                    @if($book->genre)
                        <!--
                            refer: 06-UI Component (DaisyUI).md (Badge component for categorical labels)
                            EXPLANATION: Badges provide visual categorization without overwhelming the design. badge-secondary uses theme colors, badge-sm ensures appropriate sizing for the context.
                        -->
                        <div class="badge badge-secondary badge-sm">{{ $book->genre }}</div>
                    @endif
                </h2>

                <!-- Author Information -->
                <!--
                    refer: 02-HTML CSS JS.md (Flexbox alignment for icon and text combinations)
                    EXPLANATION: flex items-center creates perfect vertical alignment between icon and text. The pattern is reusable across many UI contexts and provides professional polish to data display.
                -->
                <p class="text-sm lg:text-base text-base-content/70 flex items-center mb-2">
                    <i class="fas fa-user-edit mr-2 text-primary"></i>
                    <strong>{{ $book->author }}</strong>
                </p>

                <!-- Publication Year -->
                @if($book->publication_year)
                    <p class="text-sm text-base-content/60 flex items-center mb-3">
                        <i class="fas fa-calendar mr-2 text-accent"></i>
                        {{ $book->publication_year }}
                    </p>
                @endif

                <!-- Book Description -->
                @if($book->description)
                    <!--
                        refer: 02-HTML CSS JS.md (Text truncation techniques for consistent layouts)
                        EXPLANATION: line-clamp-3 limits description to 3 lines with ellipsis, preventing cards from varying heights while still providing useful information to users.
                    -->
                    <p class="text-sm lg:text-base text-base-content/80 line-clamp-3 mb-4">
                        {{ $book->description }}
                    </p>
                @endif

                <!-- Card Action Section -->
                <!--
                    refer: 06-UI Component (DaisyUI).md (Card actions component for interactive elements)
                    EXPLANATION: Card actions provide a consistent location for interactive elements. justify-between spaces elements to opposite ends, creating visual balance and logical grouping of related functions.
                -->
                <div class="card-actions justify-between items-center">
                    <div class="flex items-center space-x-2">
                        <!--
                            refer: 06-UI Component (DaisyUI).md (Badge outline variant for secondary information)
                            EXPLANATION: Badge outline provides visual distinction between primary information (genre) and secondary metadata (added_by) while maintaining design consistency.
                        -->
                        <div class="badge badge-outline text-xs">{{ $book->added_by }}</div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex space-x-2">
                        <!--
                            refer: 06-UI Component (DaisyUI).md (Button size variants and responsive text)
                            EXPLANATION: btn-sm creates compact buttons appropriate for card contexts. hidden sm:inline pattern shows full text on larger screens while maintaining icon-only buttons on mobile for space efficiency.
                        -->
                        <button class="btn btn-sm btn-primary">
                            <i class="fas fa-eye"></i>
                            <span class="hidden sm:inline ml-1">Lihat</span>
                        </button>
                        <button class="btn btn-sm btn-outline">
                            <i class="fas fa-edit"></i>
                            <span class="hidden sm:inline ml-1">Edit</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Empty State Design -->
<!--
    refer: 09-First View Page.md (User experience design for empty states)
    EXPLANATION: Empty states are crucial for good UX. When no data exists, users need clear guidance on what to do next. This pattern provides visual interest, explains the situation, and offers a clear call-to-action to resolve the empty state.
-->
@if($books->count() === 0)
    <div class="text-center py-16">
        <i class="fas fa-book text-6xl text-base-content/30 mb-4"></i>
        <h3 class="text-xl font-bold text-base-content/70 mb-2">No Books Found</h3>
        <p class="text-base-content/50 mb-6">Start building your collection!</p>
        <a href="{{ route('books.create') }}" class="btn btn-primary">
            <i class="fas fa-plus mr-2"></i>
            Add Your First Book
        </a>
    </div>
@endif

<!-- Responsive Learning Modal -->
<!--
    refer: 06-UI Component (DaisyUI).md (Modal component for detailed information display)
    EXPLANATION: Modals provide space for detailed explanations without cluttering the main interface. This educational modal helps students understand the responsive patterns implemented in this page.
-->
<dialog id="responsive_modal" class="modal">
    <div class="modal-box max-w-4xl">
        <h3 class="font-bold text-lg mb-4">📱 Breakdown Desain Responsif - Halaman Buku</h3>

        <!-- Kartu Penjelasan Responsif -->
        <div class="space-y-4">
            <!-- Penjelasan Layout Mobile -->
            <div class="card bg-base-200">
                <div class="card-body">
                    <h4 class="font-bold text-primary">📱 Layout Mobile (< 768px)</h4>
                    <!--
                        rujukan: 04-responsive-with-tailwind.md (Prinsip desain mobile-first)
                        PENJELASAN: Layout mobile memprioritaskan aksesibilitas konten dan interaksi sentuh. Kolom tunggal mencegah scrolling horizontal, target sentuh yang lebih besar meningkatkan kegunaan, dan layout yang disederhanakan mengurangi beban kognitif pada layar kecil.
                    -->
                    <ul class="text-sm space-y-1">
                        <li>• <code>grid-cols-1</code> - Kolom tunggal mencegah scrolling horizontal</li>
                        <li>• <code>text-2xl</code> - Ukuran heading yang sesuai untuk pembacaan mobile</li>
                        <li>• <code>p-4</code> - Padding kompak menghemat ruang layar</li>
                        <li>• <code>gap-6</code> - Spacing yang memadai untuk interaksi sentuh</li>
                    </ul>
                </div>
            </div>

            <!-- Penjelasan Layout Tablet -->
            <div class="card bg-base-200">
                <div class="card-body">
                    <h4 class="font-bold text-secondary">📱 Layout Tablet (768px - 1023px)</h4>
                    <!--
                        rujukan: 04-responsive-with-tailwind.md (Optimasi breakpoint tablet)
                        PENJELASAN: Layout tablet menyeimbangkan kepadatan konten dengan keterbacaan. Dua kolom memanfaatkan lebar yang tersedia sambil mempertahankan konsumsi konten yang nyaman. Breakpoint ini sering kali merepresentasikan sweet spot antara pengalaman mobile dan desktop.
                    -->
                    <ul class="text-sm space-y-1">
                        <li>• <code>md:grid-cols-2</code> - Dua kolom memanfaatkan lebar tablet secara efektif</li>
                        <li>• <code>sm:flex-row</code> - Layout tombol horizontal di mana ruang memungkinkan</li>
                        <li>• <code>hidden sm:inline</code> - Pengungkapan teks progresif untuk label tombol</li>
                    </ul>
                </div>
            </div>

            <!-- Penjelasan Layout Desktop -->
            <div class="card bg-base-200">
                <div class="card-body">
                    <h4 class="font-bold text-accent">🖥️ Layout Desktop (1024px+)</h4>
                    <!--
                        rujukan: 04-responsive-with-tailwind.md (Pola optimasi desktop)
                        PENJELASAN: Layout desktop memaksimalkan real estate layar yang tersedia sambil mempertahankan hierarki visual. Tiga kolom menciptakan pola scanning konten yang efisien, spacing murah hati meningkatkan kenyamanan visual, dan tipografi yang lebih besar memanfaatkan jarak pandang.
                    -->
                    <ul class="text-sm space-y-1">
                        <li>• <code>lg:grid-cols-3</code> - Tiga kolom memaksimalkan penggunaan layar desktop</li>
                        <li>• <code>lg:text-4xl</code> - Tipografi besar yang sesuai untuk tampilan desktop</li>
                        <li>• <code>lg:p-6</code> - Padding murah hati menciptakan pengalaman membaca yang nyaman</li>
                        <li>• <code>lg:text-lg</code> - Keterbacaan yang ditingkatkan dengan teks body yang lebih besar</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Modal Actions -->
        <div class="modal-action">
            <button class="btn" onclick="document.getElementById('responsive_modal').close()">Tutup</button>
        </div>
    </div>
</dialog>

<!-- JAVASCRIPT PEMBELAJARAN SISI-CLIENT -->
<!--
    📜 BAGIAN PEMBELAJARAN JAVASCRIPT:
    rujukan: 02-HTML CSS JS.md (Interaktivitas sisi-client untuk pengalaman pengguna yang ditingkatkan)
    rujukan: 10-Events & Livewire.md (Penanganan event JavaScript dan manipulasi DOM)

    PENJELASAN INTERAKTIVITAS:
    JavaScript ini menyediakan fitur edukatif yang membantu mahasiswa memahami perilaku responsif secara real-time. Ini mendemonstrasikan:
    1. Manipulasi DOM untuk pembaruan konten dinamis
    2. Penanganan event untuk interaksi pengguna
    3. Console logging untuk debugging dan pembelajaran
    4. Deteksi dan pelaporan breakpoint responsif
-->
<script>
// Fungsi Modal Informasi Responsif
// rujukan: 02-HTML CSS JS.md (Definisi fungsi dan pemilihan elemen DOM)
// PENJELASAN: Fungsi ini mendemonstrasikan manipulasi DOM dasar dengan menampilkan dialog modal. Ini dipicu oleh klik tombol dan memberikan informasi edukatif tentang pola desain responsif yang digunakan di halaman ini.
function showResponsiveInfo() {
    document.getElementById('responsive_modal').showModal();
}

// Logger Breakpoint Responsif untuk Pembelajaran
// rujukan: 04-responsive-with-tailwind.md (Deteksi breakpoint untuk tujuan edukatif)
// PENJELASAN: Fungsi ini membantu mahasiswa memahami breakpoint responsif mana yang sedang aktif dengan mencatat informasi ke console browser. Ini adalah alat edukatif yang membuat perilaku responsif terlihat selama pengembangan dan pengujian.
function logCurrentLayout() {
    const width = window.innerWidth;
    let columns = 1;
    let breakpoint = 'Mobile';

    if (width >= 1024) {
        columns = 3;
        breakpoint = 'Desktop (lg)';
    } else if (width >= 768) {
        columns = 2;
        breakpoint = 'Tablet (md)';
    }

    console.log(`📚 Grid Buku: ${columns} kolom pada ${width}px (${breakpoint})`);
    console.log(`💡 Tips Pembelajaran: Ubah ukuran window browser untuk melihat perubahan responsif!`);
}

// Event Listeners untuk Umpan Balik Edukatif
// rujukan: 02-HTML CSS JS.md (Penanganan event untuk monitoring perilaku responsif)
// PENJELASAN: Event listener resize memberikan umpan balik real-time saat mahasiswa menguji perilaku responsif. Umpan balik langsung ini membantu mahasiswa memahami cara kerja breakpoint dan kapan layout berubah.
window.addEventListener('resize', logCurrentLayout);
logCurrentLayout(); // Log keadaan awal ketika halaman dimuat

// Pesan Console Edukatif
// rujukan: 02-HTML CSS JS.md (Console logging untuk panduan pengembangan)
// PENJELASAN: Pesan console ini memberikan panduan dan tips untuk mahasiswa yang belajar desain responsif. Mereka muncul secara otomatis ketika halaman dimuat dan memandu mahasiswa menuju aktivitas pembelajaran yang produktif.
console.log('🎓 MODUL PEMBELAJARAN FRONTEND');
console.log('📱 Buka DevTools dan ubah ukuran browser untuk melihat breakpoint responsif beraksi!');
console.log('🔧 Gunakan Mode Desain Responsif (Ctrl+Shift+M) untuk menguji berbagai ukuran layar');
console.log('📚 Pelajari halaman Buku ini, lalu berlatih dengan latihan halaman Film');
</script>
@endsection
