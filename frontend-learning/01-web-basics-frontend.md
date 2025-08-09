# 01. Web Basics untuk Frontend Development

## 🎯 Learning Objectives

Setelah chapter ini, kamu akan understand:
- HTML struktur yang semantic dan well-organized
- CSS styling fundamentals untuk responsive design
- Client-server concept basic (tanpa deep backend knowledge)
- Browser DevTools untuk debugging dan testing

## 📖 HTML Struktur yang Semantic

### 🔍 Mengapa Semantic HTML Penting?

```html
<!-- ❌ BAD: Non-semantic HTML -->
<div class="header">
  <div class="nav">
    <div class="nav-item">Home</div>
  </div>
</div>
<div class="content">
  <div class="post">
    <div class="title">Article Title</div>
  </div>
</div>

<!-- ✅ GOOD: Semantic HTML -->
<header>
  <nav>
    <a href="/">Home</a>
  </nav>
</header>
<main>
  <article>
    <h1>Article Title</h1>
  </article>
</main>
```

**Benefits:**
- 🤖 Better SEO (search engines understand structure)
- ♿ Accessibility improvements (screen readers friendly)
- 🧹 Cleaner code organization
- 🎯 Easier CSS targeting

### 📝 HTML Structure dalam Laravel Blade

Dalam project kita, lihat struktur di `resources/views/layouts/app.blade.php`:

```html
<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <!-- Meta tags untuk responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS Framework -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Semantic navigation -->
    <nav class="navbar">
        <!-- Navigation content -->
    </nav>
    
    <!-- Main content area -->
    <main class="container mx-auto">
        @yield('content')
    </main>
    
    <!-- Footer section -->
    <footer class="footer">
        <!-- Footer content -->
    </footer>
</body>
</html>
```

**Key Points:**
- `<nav>` untuk navigation elements
- `<main>` untuk primary content
- `<footer>` untuk footer information
- `data-theme` untuk DaisyUI theme switching

## 🎨 CSS Styling Fundamentals

### 📐 Box Model Understanding

```css
/* Traditional CSS approach */
.card {
    /* Box model properties */
    margin: 16px;      /* Space outside element */
    padding: 24px;     /* Space inside element */
    border: 1px solid #ccc;
    width: 300px;
    height: 200px;
}

/* Tailwind CSS equivalent */
.card {
    @apply m-4 p-6 border border-gray-300 w-75 h-50;
}
```

### 🔧 Tailwind CSS Fundamentals

**Spacing System:**
```html
<!-- Margin -->
<div class="m-4">    <!-- margin: 1rem (16px) -->
<div class="mx-4">   <!-- margin-left/right: 1rem -->
<div class="mt-4">   <!-- margin-top: 1rem -->

<!-- Padding -->
<div class="p-4">    <!-- padding: 1rem -->
<div class="px-4">   <!-- padding-left/right: 1rem -->
<div class="py-4">   <!-- padding-top/bottom: 1rem -->
```

**Colors:**
```html
<!-- Background colors -->
<div class="bg-blue-500">    <!-- Blue background -->
<div class="bg-gray-100">    <!-- Light gray background -->

<!-- Text colors -->
<p class="text-blue-600">    <!-- Blue text -->
<p class="text-gray-800">    <!-- Dark gray text -->
```

**Typography:**
```html
<!-- Font sizes -->
<h1 class="text-4xl">        <!-- 2.25rem / 36px -->
<p class="text-base">        <!-- 1rem / 16px -->
<small class="text-sm">      <!-- 0.875rem / 14px -->

<!-- Font weights -->
<h2 class="font-bold">       <!-- font-weight: 700 -->
<p class="font-medium">      <!-- font-weight: 500 -->
```

## 🌐 Client-Server Concept Basic

### 📊 Data Flow dalam Laravel (Frontend Perspective)

```
Database → Model → Controller → View (Blade) → Browser
```

**Yang perlu kamu tahu sebagai frontend developer:**

1. **Controller mengirim data ke view:**
```php
// BookController.php
public function index()
{
    $books = Book::all();  // Data dari database
    return view('books.index', compact('books'));  // Kirim ke view
}
```

2. **View menerima dan menampilkan data:**
```html
<!-- books/index.blade.php -->
@foreach($books as $book)
    <div class="card">
        <h3>{{ $book->title }}</h3>
        <p>{{ $book->author }}</p>
    </div>
@endforeach
```

**Key Concepts:**
- 📥 **Data Input**: Data masuk dari form submissions
- 🔄 **Data Processing**: Backend memproses (kamu nggak perlu ribet dengan ini)
- 📤 **Data Output**: Data keluar dalam bentuk HTML yang bisa kamu style

### 🔗 HTTP Requests Basic

```html
<!-- GET request (mengambil data) -->
<a href="/books">View Books</a>

<!-- POST request (mengirim data) -->
<form action="/books" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Book Title">
    <button type="submit">Add Book</button>
</form>
```

## 🛠️ Browser DevTools untuk Frontend Learning

### 🔍 Essential DevTools Features

**1. Elements Inspector:**
```
Right-click → Inspect Element
atau
F12 → Elements tab
```

- **View HTML structure**: Lihat real DOM structure
- **Edit CSS live**: Test styling changes instantly
- **Debug layout issues**: Understand spacing dan positioning

**2. Responsive Design Mode:**
```
F12 → Toggle device toolbar (phone icon)
atau
Ctrl+Shift+M
```

- **Test different screen sizes**: iPhone, iPad, desktop
- **Custom dimensions**: Set specific width/height
- **See breakpoint behavior**: Watch layout changes

**3. Console untuk Learning:**
```javascript
// Our learning module adds helpful console messages
console.log('Current breakpoint: Desktop (1024px+)');
console.log('Grid columns: 3');
```

### 📱 Testing Responsive Design

**Step-by-step process:**

1. **Open DevTools** (F12)
2. **Enable responsive mode** (Ctrl+Shift+M)
3. **Start with mobile size** (375px width)
4. **Gradually increase width** and watch layout changes:
   - 📱 375px: Mobile (1 column)
   - 📱 768px: Tablet (2 columns)
   - 🖥️ 1024px: Desktop (3 columns)

**What to observe:**
- Grid column changes
- Typography scaling
- Navigation transformations
- Image responsive behavior

## ✅ Practical Exercise

### 🎯 Task: Analyze Books Page Structure

1. **Open** `http://localhost:8000/books`
2. **Right-click** on any book card → Inspect Element
3. **Identify**:
   - Semantic HTML elements used
   - Tailwind classes applied
   - Responsive grid structure
4. **Test responsive behavior**:
   - Open DevTools responsive mode
   - Resize from mobile to desktop
   - Note layout changes

### 📝 Questions to Answer:

1. **HTML Structure**: What semantic elements are used in the navigation?
2. **CSS Classes**: What Tailwind classes create the responsive grid?
3. **Responsive Behavior**: At what screen width does the layout change from 2 to 3 columns?
4. **Data Flow**: How many books are displayed and where does this data come from?

## 🚀 Next Steps

Setelah comfortable dengan basics:

1. **Practice HTML semantic structure** dalam your own templates
2. **Experiment dengan Tailwind classes** untuk different styling effects
3. **Use DevTools regularly** untuk debug dan test
4. **Move to next chapter**: Data Integration dengan Laravel Blade

## 💡 Pro Tips

- 🔍 **Always inspect elements** when you see interesting designs
- 📱 **Test mobile-first**: Start dengan smallest screen size
- 🎨 **Learn Tailwind patterns**: Common class combinations untuk specific effects
- 📚 **Use documentation**: [Tailwind CSS docs](https://tailwindcss.com) adalah your best friend

---

**Ready untuk next level?** Lanjut ke [02. Getting Data from Backend](./02-getting-data-from-backend.md)
