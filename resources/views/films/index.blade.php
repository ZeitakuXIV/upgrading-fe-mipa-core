@extends('layouts.app')

@section('title', 'Films Collection - Exercise')

@section('content')
<!--
    🎬 FILMS INDEX - EXERCISE VERSION

    TODO: INI ADALAH LATIHAN RESPONSIVE DESIGN!

    Current state: Layout TIDAK responsive, hanya basic HTML
    Your task: Convert ke mobile-first responsive design

    TARGET RESPONSIVE PATTERN:
    - Mobile: 1 column (grid-cols-1)
    - Tablet: 2 columns (md:grid-cols-2)
    - Desktop: 3 columns (lg:grid-cols-3)

    FOLLOW THE PROGRESSIVE STEPS BELOW!
-->

<!-- Basic Header (needs responsive typography) -->
<div class="mb-8">
    <!-- TODO: [RESPONSIVE STEP 1] Make typography responsive -->
    <!-- Current: Fixed text-3xl -->
    <!-- Target: text-2xl lg:text-4xl (smaller on mobile, larger on desktop) -->
    <h1 class="text-3xl font-bold text-base-content mb-2">
        🎬 Films Collection
    </h1>

    <!-- TODO: [RESPONSIVE STEP 2] Make description text responsive -->
    <!-- Current: Fixed text-base -->
    <!-- Target: text-sm lg:text-lg -->
    <p class="text-base text-base-content/70 mb-4">
        <span class="badge badge-warning badge-sm mr-2">⚠️ EXERCISE VERSION</span>
        This layout needs to be made responsive. Your task!
    </p>

    <!-- Exercise Instructions -->
    <div class="alert alert-warning mb-6">
        <i class="fas fa-wrench"></i>
        <div>
            <h3 class="font-bold">Your Mission:</h3>
            <ul class="text-sm mt-2 space-y-1">
                <li>📱 <strong>Step 1:</strong> Make the grid responsive (1→2→3 columns)</li>
                <li>📝 <strong>Step 2:</strong> Add responsive typography scaling</li>
                <li>📏 <strong>Step 3:</strong> Implement responsive spacing</li>
                <li>🎯 <strong>Goal:</strong> Match the Books page responsive behavior</li>
            </ul>
        </div>
    </div>
</div>

<!-- TODO: [RESPONSIVE STEP 3] Make stats grid responsive -->
<!-- Current: Basic flex layout (not responsive) -->
<!-- Target: grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 -->
<div class="flex mb-8">
    <div class="stat bg-primary text-primary-content rounded-lg mr-4">
        <div class="stat-figure">
            <i class="fas fa-film text-2xl opacity-80"></i>
        </div>
        <div class="stat-title text-primary-content/80">Total Films</div>
        <div class="stat-value">{{ $films->count() }}</div>
    </div>

    <!-- TODO: Add more stat cards and make them responsive -->
</div>

<!-- Action Buttons (needs responsive layout) -->
<!-- TODO: [RESPONSIVE STEP 4] Make button layout responsive -->
<!-- Current: Basic flex -->
<!-- Target: flex-col sm:flex-row gap-4 -->
<div class="flex gap-4 mb-8">
    <a href="{{ route('films.create') }}" class="btn btn-primary">
        <i class="fas fa-plus mr-2"></i>
        Add New Film
    </a>

    <button class="btn btn-outline" onclick="showExerciseHints()">
        <i class="fas fa-question-circle mr-2"></i>
        Need Hints?
    </button>

    <a href="/books" class="btn btn-success">
        <i class="fas fa-eye mr-2"></i>
        See Reference (Books)
    </a>
</div>

<!-- ⚠️ MAIN EXERCISE AREA ⚠️ -->
<!-- TODO: [RESPONSIVE STEP 5] CONVERT THIS TO RESPONSIVE GRID -->

<!-- Current Non-Responsive Layout (BAD) -->
<div class="flex">
    @foreach($films as $film)
        <!-- TODO: Convert this to responsive card layout -->
        <!-- Current: Basic div with minimal styling -->
        <!-- Target: Proper responsive card like in Books page -->
        <div class="bg-white p-4 m-2 rounded shadow">
            <h3 class="font-bold">{{ $film->title }}</h3>
            <p class="text-gray-600">Director: {{ $film->director }}</p>

            @if($film->release_year)
                <p class="text-sm text-gray-500">{{ $film->release_year }}</p>
            @endif

            @if($film->genre)
                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{ $film->genre }}</span>
            @endif

            @if($film->description)
                <p class="text-sm mt-2">{{ $film->description }}</p>
            @endif

            @if($film->duration)
                <p class="text-xs text-gray-400 mt-2">{{ $film->duration }} minutes</p>
            @endif

            <div class="mt-4">
                <button class="bg-blue-500 text-white px-3 py-1 rounded text-sm">View</button>
                <button class="bg-gray-500 text-white px-3 py-1 rounded text-sm ml-2">Edit</button>
            </div>
        </div>
    @endforeach
</div>

<!-- EXERCISE SOLUTION TEMPLATE (commented out) -->
<!--
    TODO: Replace the above <div class="flex"> with this responsive grid:

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($films as $film)
            <div class="card bg-base-100 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-base-300">
                [Add proper responsive card content here]
            </div>
        @endforeach
    </div>
-->

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
            <button class="btn" onclick="document.getElementById('exercise_modal').close()">Close Hints</button>
        </div>
    </div>
</dialog>

<script>
function showExerciseHints() {
    document.getElementById('exercise_modal').showModal();
}

// Log layout issues for learning
function checkLayoutIssues() {
    const flexContainer = document.querySelector('.flex');
    if (flexContainer && flexContainer.scrollWidth > flexContainer.clientWidth) {
        console.warn('⚠️ Layout Issue: Horizontal overflow detected! Use responsive grid instead of flex.');
    }
}

window.addEventListener('resize', checkLayoutIssues);
checkLayoutIssues();

// Learning reminder
console.log('🎯 Exercise: Convert this non-responsive layout to mobile-first responsive design!');
console.log('📚 Reference: Compare with /books page to see the target implementation');
</script>
@endsection
