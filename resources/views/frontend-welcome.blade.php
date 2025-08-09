@extends('layouts.app')

@section('title', 'Frontend Learning Module')

@section('content')
<!-- Hero Section -->
<div class="hero min-h-[60vh] bg-gradient-to-br from-primary/10 to-secondary/10 rounded-3xl">
    <div class="hero-content text-center">
        <div class="max-w-4xl">
            <!-- Main Hero Content with Responsive Typography -->
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-primary mb-6">
                <i class="fas fa-laptop-code mr-4"></i>
                Frontend Learning
            </h1>

            <p class="text-lg md:text-xl lg:text-2xl text-base-content/80 mb-8 max-w-3xl mx-auto leading-relaxed">
                Belajar <strong>responsive design</strong> dan <strong>modern UI development</strong>
                dengan focus pada implementasi, bukan teori backend yang rumit!
            </p>

            <!-- Learning Philosophy Badge -->
            <div class="badge badge-secondary badge-lg p-4 mb-8 text-base font-medium">
                💡 "Backend sudah ready, kamu fokus bikin tampilan yang awesome!"
            </div>

            <!-- CTA Buttons with Responsive Layout -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="/books" class="btn btn-primary btn-lg">
                    <i class="fas fa-book mr-2"></i>
                    Explore Books (Reference)
                </a>

                <a href="/films" class="btn btn-warning btn-lg">
                    <i class="fas fa-film mr-2"></i>
                    Try Films Exercise
                </a>

                <button onclick="scrollToLearningPath()" class="btn btn-outline btn-lg">
                    <i class="fas fa-graduation-cap mr-2"></i>
                    Learning Path
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Learning Stats with Responsive Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 my-16">
    <div class="stat bg-primary text-primary-content rounded-2xl shadow-lg">
        <div class="stat-figure">
            <i class="fas fa-mobile-alt text-3xl opacity-80"></i>
        </div>
        <div class="stat-title text-primary-content/80">Focus Area</div>
        <div class="stat-value text-2xl lg:text-3xl">Mobile-First</div>
        <div class="stat-desc text-primary-content/70">Responsive Design</div>
    </div>

    <div class="stat bg-secondary text-secondary-content rounded-2xl shadow-lg">
        <div class="stat-figure">
            <i class="fas fa-palette text-3xl opacity-80"></i>
        </div>
        <div class="stat-title text-secondary-content/80">UI Framework</div>
        <div class="stat-value text-2xl lg:text-3xl">DaisyUI</div>
        <div class="stat-desc text-secondary-content/70">+ Tailwind CSS</div>
    </div>

    <div class="stat bg-accent text-accent-content rounded-2xl shadow-lg">
        <div class="stat-figure">
            <i class="fas fa-code text-3xl opacity-80"></i>
        </div>
        <div class="stat-title text-accent-content/80">Skill Level</div>
        <div class="stat-value text-2xl lg:text-3xl">Beginner</div>
        <div class="stat-desc text-accent-content/70">Frontend Only</div>
    </div>

    <div class="stat bg-neutral text-neutral-content rounded-2xl shadow-lg">
        <div class="stat-figure">
            <i class="fas fa-language text-3xl opacity-80"></i>
        </div>
        <div class="stat-title text-neutral-content/80">Language</div>
        <div class="stat-value text-2xl lg:text-3xl">ID + EN</div>
        <div class="stat-desc text-neutral-content/70">Mixed Learning</div>
    </div>
</div>

<!-- Learning Path Section -->
<div id="learning-path" class="my-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl lg:text-5xl font-bold text-base-content mb-4">
            📚 Learning Path
        </h2>
        <p class="text-lg text-base-content/70 max-w-2xl mx-auto">
            Progressive learning dari basic HTML sampai advanced responsive patterns
        </p>
    </div>

    <!-- Learning Steps with Responsive Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Step 1 -->
        <div class="card bg-base-100 shadow-xl border border-success/20 hover:border-success/40 transition-colors">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <div class="avatar placeholder mr-3">
                        <div class="bg-success text-success-content rounded-full w-12">
                            <span class="text-lg font-bold">1</span>
                        </div>
                    </div>
                    <h3 class="card-title text-success">Web Basics</h3>
                </div>

                <ul class="text-sm space-y-2 text-base-content/80">
                    <li>• HTML struktur yang semantic</li>
                    <li>• CSS styling fundamentals</li>
                    <li>• Client-server concept basic</li>
                    <li>• Browser DevTools introduction</li>
                </ul>

                <div class="card-actions justify-end mt-4">
                    <div class="badge badge-success badge-outline">Foundation</div>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="card bg-base-100 shadow-xl border border-warning/20 hover:border-warning/40 transition-colors">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <div class="avatar placeholder mr-3">
                        <div class="bg-warning text-warning-content rounded-full w-12">
                            <span class="text-lg font-bold">2</span>
                        </div>
                    </div>
                    <h3 class="card-title text-warning">Data Integration</h3>
                </div>

                <ul class="text-sm space-y-2 text-base-content/80">
                    <li>• Ambil data dari controller</li>
                    <li>• Blade templating basics</li>
                    <li>• Loop dan conditional rendering</li>
                    <li>• Data presentation patterns</li>
                </ul>

                <div class="card-actions justify-end mt-4">
                    <div class="badge badge-warning badge-outline">Integration</div>
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="card bg-base-100 shadow-xl border border-primary/20 hover:border-primary/40 transition-colors">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <div class="avatar placeholder mr-3">
                        <div class="bg-primary text-primary-content rounded-full w-12">
                            <span class="text-lg font-bold">3</span>
                        </div>
                    </div>
                    <h3 class="card-title text-primary">DaisyUI Components</h3>
                </div>

                <ul class="text-sm space-y-2 text-base-content/80">
                    <li>• Ready-made UI components</li>
                    <li>• Cards, buttons, forms, navbar</li>
                    <li>• Theme customization</li>
                    <li>• Component composition</li>
                </ul>

                <div class="card-actions justify-end mt-4">
                    <div class="badge badge-primary badge-outline">UI Components</div>
                </div>
            </div>
        </div>

        <!-- Step 4 -->
        <div class="card bg-base-100 shadow-xl border border-secondary/20 hover:border-secondary/40 transition-colors">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <div class="avatar placeholder mr-3">
                        <div class="bg-secondary text-secondary-content rounded-full w-12">
                            <span class="text-lg font-bold">4</span>
                        </div>
                    </div>
                    <h3 class="card-title text-secondary">Responsive Design ⭐</h3>
                </div>

                <ul class="text-sm space-y-2 text-base-content/80">
                    <li>• Mobile-first methodology</li>
                    <li>• Tailwind breakpoints mastery</li>
                    <li>• Grid responsive patterns</li>
                    <li>• Typography & spacing scaling</li>
                </ul>

                <div class="card-actions justify-end mt-4">
                    <div class="badge badge-secondary badge-outline">CORE FOCUS</div>
                </div>
            </div>
        </div>

        <!-- Step 5 -->
        <div class="card bg-base-100 shadow-xl border border-accent/20 hover:border-accent/40 transition-colors">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <div class="avatar placeholder mr-3">
                        <div class="bg-accent text-accent-content rounded-full w-12">
                            <span class="text-lg font-bold">5</span>
                        </div>
                    </div>
                    <h3 class="card-title text-accent">Interactive Elements</h3>
                </div>

                <ul class="text-sm space-y-2 text-base-content/80">
                    <li>• Forms dan form validation</li>
                    <li>• Buttons dan click handlers</li>
                    <li>• Modals dan tooltips</li>
                    <li>• Basic Livewire integration</li>
                </ul>

                <div class="card-actions justify-end mt-4">
                    <div class="badge badge-accent badge-outline">Interactivity</div>
                </div>
            </div>
        </div>

        <!-- Step 6 -->
        <div class="card bg-base-100 shadow-xl border border-neutral/20 hover:border-neutral/40 transition-colors">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <div class="avatar placeholder mr-3">
                        <div class="bg-neutral text-neutral-content rounded-full w-12">
                            <span class="text-lg font-bold">6</span>
                        </div>
                    </div>
                    <h3 class="card-title text-neutral">UI/UX Best Practices</h3>
                </div>

                <ul class="text-sm space-y-2 text-base-content/80">
                    <li>• Loading states & feedback</li>
                    <li>• Error handling UI patterns</li>
                    <li>• User experience principles</li>
                    <li>• Accessibility considerations</li>
                </ul>

                <div class="card-actions justify-end mt-4">
                    <div class="badge badge-neutral badge-outline">UX Polish</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Start Section -->
<div class="text-center my-16 p-8 bg-base-200 rounded-3xl">
    <h2 class="text-2xl lg:text-4xl font-bold text-base-content mb-6">
        🚀 Ready to Start?
    </h2>

    <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
        <div class="card bg-success text-success-content shadow-lg">
            <div class="card-body text-center">
                <h3 class="card-title justify-center">📚 Study Reference</h3>
                <p class="text-sm">Lihat implementasi yang sudah responsive</p>
                <a href="/books" class="btn btn-success-content btn-sm mt-2">
                    View Books Page
                </a>
            </div>
        </div>

        <div class="text-2xl">→</div>

        <div class="card bg-warning text-warning-content shadow-lg">
            <div class="card-body text-center">
                <h3 class="card-title justify-center">💪 Practice Exercise</h3>
                <p class="text-sm">Convert layout yang belum responsive</p>
                <a href="/films" class="btn btn-warning-content btn-sm mt-2">
                    Try Films Exercise
                </a>
            </div>
        </div>
    </div>

    <div class="mt-8 text-sm text-base-content/70">
        <i class="fas fa-lightbulb mr-2"></i>
        <strong>Pro Tip:</strong> Buka browser DevTools dan resize window untuk test responsive behavior!
    </div>
</div>

<script>
function scrollToLearningPath() {
    document.getElementById('learning-path').scrollIntoView({ behavior: 'smooth' });
}

// Welcome message in console
console.log('🎓 Welcome to Frontend Learning Module!');
console.log('📱 Focus: Mobile-first responsive design');
console.log('🛠️ Tools: Laravel + Tailwind CSS + DaisyUI');
console.log('💡 Philosophy: Backend sudah ready, fokus ke UI yang awesome!');
</script>
@endsection
