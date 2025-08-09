@extends('layouts.app')

@section('title', 'Books Collection')

@section('content')
<div class="container mx-auto px-4 py-8">
     Page Header
    <div class="mb-8">
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">
            <div>
                <h1 class="text-3xl lg:text-4xl font-bold text-base-content mb-2">
                    📚 Books Collection
                </h1>
                <p class="text-base-content/70">
                    Manage and explore your book library
                </p>
            </div>

             Action Buttons
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('books.create') }}" class="btn btn-primary">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add New Book
                </a>

                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-outline">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                        </svg>
                        Filter
                    </div>
                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow-lg border border-base-300">
                        <li><a>All Books</a></li>
                        <li><a>By Author</a></li>
                        <li><a>By Genre</a></li>
                        <li><a>By Year</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

     Statistics Cards
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="stats shadow-lg border border-base-300">
            <div class="stat bg-primary text-primary-content">
                <div class="stat-figure">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="stat-title text-primary-content/80">Total Books</div>
                <div class="stat-value">{{ $books->count() }}</div>
                <div class="stat-desc text-primary-content/60">In your collection</div>
            </div>
        </div>

        <div class="stats shadow-lg border border-base-300">
            <div class="stat bg-secondary text-secondary-content">
                <div class="stat-figure">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                    </svg>
                </div>
                <div class="stat-title text-secondary-content/80">Authors</div>
                <div class="stat-value">{{ $books->pluck('author')->unique()->count() }}</div>
                <div class="stat-desc text-secondary-content/60">Unique writers</div>
            </div>
        </div>

        <div class="stats shadow-lg border border-base-300">
            <div class="stat bg-accent text-accent-content">
                <div class="stat-figure">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M17.707 9.293a1 1 0 010 1.414l-7 7a1 1 0 01-1.414 0l-7-7A.997.997 0 012 10V5a3 3 0 013-3h5c.256 0 .512.098.707.293l7 7zM5 6a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="stat-title text-accent-content/80">Genres</div>
                <div class="stat-value">{{ $books->pluck('genre')->unique()->count() }}</div>
                <div class="stat-desc text-accent-content/60">Different categories</div>
            </div>
        </div>

        <div class="stats shadow-lg border border-base-300">
            <div class="stat bg-info text-info-content">
                <div class="stat-figure">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="stat-title text-info-content/80">Latest Year</div>
                <div class="stat-value">{{ $books->max('publication_year') ?? 'N/A' }}</div>
                <div class="stat-desc text-info-content/60">Most recent</div>
            </div>
        </div>
    </div>

    @if($books->count() > 0)
         Books Grid
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($books as $book)
                <div class="card bg-base-100 shadow-lg hover:shadow-xl transition-all duration-300 border border-base-300 group">
                     Book Cover/Icon
                    <figure class="px-6 pt-6">
                        <div class="avatar placeholder">
                            <div class="bg-gradient-to-br from-primary to-secondary text-primary-content rounded-xl w-20 h-20 group-hover:scale-105 transition-transform duration-300">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                    </figure>

                    <div class="card-body p-6">
                         Title and Genre
                        <div class="flex flex-col gap-2 mb-3">
                            <h2 class="card-title text-lg font-bold line-clamp-2 group-hover:text-primary transition-colors">
                                {{ $book->title }}
                            </h2>

                            @if($book->genre)
                                <div class="badge badge-secondary badge-sm">{{ $book->genre }}</div>
                            @endif
                        </div>

                         Author
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-4 h-4 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium text-base-content/80">{{ $book->author }}</span>
                        </div>

                         Publication Year
                        @if($book->publication_year)
                            <div class="flex items-center gap-2 mb-3">
                                <svg class="w-4 h-4 text-accent flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm text-base-content/60">{{ $book->publication_year }}</span>
                            </div>
                        @endif

                         Description
                        @if($book->description)
                            <p class="text-sm text-base-content/70 line-clamp-3 mb-4">
                                {{ $book->description }}
                            </p>
                        @endif

                         Card Actions
                        <div class="card-actions justify-between items-center pt-4 border-t border-base-300">
                            <div class="badge badge-outline badge-sm">
                                {{ $book->added_by ?? 'Unknown' }}
                            </div>

                            <div class="flex gap-2">
                                <a href="" class="btn btn-sm btn-primary btn-outline">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </a>

                                <a href="" class="btn btn-sm btn-warning btn-outline">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>

                                <form action="" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this book?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-error btn-outline">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

         Pagination
        @if(method_exists($books, 'links'))
            <div class="mt-8 flex justify-center">
                {{ $books->links() }}
            </div>
        @endif

    @else
         Empty State
        <div class="text-center py-16">
            <div class="mb-6">
                <svg class="w-24 h-24 mx-auto text-base-content/30" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>

            <h3 class="text-2xl font-bold text-base-content/70 mb-2">No Books Found</h3>
            <p class="text-base-content/50 mb-8 max-w-md mx-auto">
                Your library is empty. Start building your collection by adding your first book!
            </p>

            <a href="{{ route('books.create') }}" class="btn btn-primary btn-lg">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add Your First Book
            </a>
        </div>
    @endif
</div>

 Success/Error Messages
@if(session('success'))
    <div class="toast toast-top toast-end">
        <div class="alert alert-success">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="toast toast-top toast-end">
        <div class="alert alert-error">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>{{ session('error') }}</span>
        </div>
    </div>
@endif

<script>
// Auto-hide toast messages
document.addEventListener('DOMContentLoaded', function() {
    const toasts = document.querySelectorAll('.toast .alert');
    toasts.forEach(toast => {
        setTimeout(() => {
            toast.style.opacity = '0';
            setTimeout(() => toast.remove(), 300);
        }, 5000);
    });
});

// Add loading states to buttons
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function(e) {
        const submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) {
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
        }
    });
});
</script>
@endsection
