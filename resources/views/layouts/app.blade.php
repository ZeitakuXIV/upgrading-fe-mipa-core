<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Frontend Learning Module')</title>

    <!-- Tailwind CSS + DaisyUI -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="min-h-screen bg-base-100">
    <!--
        FRONTEND LEARNING NAVIGATION
        Responsive navbar with mobile menu

        Breakdown Tailwind classes:
        - navbar: DaisyUI navbar component
        - bg-base-100: Background color from DaisyUI theme
        - border-b: Bottom border
        - border-base-300: Border color from theme
    -->
    <nav class="navbar bg-base-100 border-b border-base-300 sticky top-0 z-50 shadow-sm">
        <div class="navbar-start">
            <!-- Mobile menu button - visible only on small screens -->
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <i class="fas fa-bars text-xl"></i>
                </div>
                <ul class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="/books" class="text-base">📚 Books (Reference)</a></li>
                    <li><a href="/films" class="text-base">🎬 Films (Exercise)</a></li>
                    <li><a href="#learning-docs" class="text-base">📖 Learning Docs</a></li>
                </ul>
            </div>

            <!-- Logo/Brand -->
            <a href="/" class="btn btn-ghost text-xl font-bold text-primary">
                <i class="fas fa-code mr-2"></i>
                Frontend Learning
            </a>
        </div>

        <!-- Desktop menu - hidden on mobile, visible on large screens -->
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 space-x-2">
                <li>
                    <a href="/books" class="btn btn-ghost">
                        <i class="fas fa-book text-success mr-2"></i>
                        Books (Reference)
                    </a>
                </li>
                <li>
                    <a href="/films" class="btn btn-ghost">
                        <i class="fas fa-film text-warning mr-2"></i>
                        Films (Exercise)
                    </a>
                </li>
                <li>
                    <a href="#learning-docs" class="btn btn-ghost">
                        <i class="fas fa-graduation-cap text-info mr-2"></i>
                        Learning Docs
                    </a>
                </li>
            </ul>
        </div>

        <!-- Right side actions -->
        <div class="navbar-end">
            <!-- Theme switcher -->
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <i class="fas fa-palette text-lg"></i>
                </div>
                <ul class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-32">
                    <li><a onclick="document.documentElement.setAttribute('data-theme', 'light')">Light</a></li>
                    <li><a onclick="document.documentElement.setAttribute('data-theme', 'dark')">Dark</a></li>
                    <li><a onclick="document.documentElement.setAttribute('data-theme', 'cupcake')">Cupcake</a></li>
                    <li><a onclick="document.documentElement.setAttribute('data-theme', 'emerald')">Emerald</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="alert alert-success mx-4 mt-4">
            <i class="fas fa-check-circle"></i>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-error mx-4 mt-4">
            <i class="fas fa-exclamation-circle"></i>
            <span>{{ session('error') }}</span>
        </div>
    @endif

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer footer-center p-10 bg-base-200 text-base-content">
        <aside>
            <i class="fas fa-laptop-code text-4xl text-primary mb-4"></i>
            <p class="font-bold text-lg">Frontend Learning Module</p>
            <p class="max-w-md">
                Focus pada responsive design, component usage, dan best practices.
                Backend sudah ready, kamu fokus ke tampilan yang awesome!
            </p>
            <p class="text-sm opacity-70 mt-2">
                Made with ❤️ using Laravel + Tailwind CSS + DaisyUI
            </p>
        </aside>
    </footer>

    <!-- Learning Helper Script -->
    <script>
        // Helper function to show current screen size
        function showCurrentBreakpoint() {
            const width = window.innerWidth;
            let breakpoint = '';

            if (width < 640) breakpoint = 'Mobile (<640px)';
            else if (width < 768) breakpoint = 'SM (640px+)';
            else if (width < 1024) breakpoint = 'MD (768px+)';
            else if (width < 1280) breakpoint = 'LG (1024px+)';
            else if (width < 1536) breakpoint = 'XL (1280px+)';
            else breakpoint = '2XL (1536px+)';

            console.log(`Current breakpoint: ${breakpoint} | Width: ${width}px`);
        }

        // Show breakpoint on resize (for learning purpose)
        window.addEventListener('resize', showCurrentBreakpoint);
        showCurrentBreakpoint(); // Show on page load

        // Learning tip in console
        console.log('🎓 Frontend Learning Tip: Open DevTools and resize browser to see responsive breakpoints!');
    </script>
</body>
</html>
