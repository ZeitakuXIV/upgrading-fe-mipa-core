@extends('layouts.app')

@section('title', 'Books Collection')

@section('content')
<div class="min-h-screen bg-gray-50">
    <div class="container mx-auto px-4 py-8">
         Page Header
        <div class="mb-12">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                <div>
                    <h1 class="text-3xl lg:text-4xl font-light text-gray-800 mb-3">
                        Books Collection
                    </h1>
                    <p class="text-gray-600 font-light">
                        A curated library of knowledge and stories
                    </p>
                </div>

                 Action Buttons
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('books.create') }}" class="btn bg-gray-800 hover:bg-gray-700 text-white border-none font-normal">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"></path>
                        </svg>
                        Add Book
                    </a>

                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn bg-white hover:bg-gray-50 text-gray-700 border border-gray-200 font-normal">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                            </svg>
                            Filter
                        </div>
                        <ul tabindex="0" class="dropdown-content menu bg-white rounded-lg z-[1] w-52 p-2 shadow-lg border border-gray-100">
                            <li><a class="text-gray-700 hover:bg-gray-50 rounded-md">All Books</a></li>
                            <li><a class="text-gray-700 hover:bg-gray-50 rounded-md">By Author</a></li>
                            <li><a class="text-gray-700 hover:bg-gray-50 rounded-md">By Genre</a></li>
                            <li><a class="text-gray-700 hover:bg-gray-50 rounded-md">By Year</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

         Statistics Cards
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 mb-1">Total Books</p>
                        <p class="text-2xl font-light text-gray-800">{{ $books->count() }}</p>
                        <p class="text-xs text-gray-400 mt-1">In collection</p>
                    </div>
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 mb-1">Authors</p>
                        <p class="text-2xl font-light text-gray-800">{{ $books->pluck('author')->unique()->count() }}</p>
                        <p class="text-xs text-gray-400 mt-1">Unique writers</p>
                    </div>
                    <div class="w-12 h-12 bg-blue-50 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 mb-1">Genres</p>
                        <p class="text-2xl font-light text-gray-800">{{ $books->pluck('genre')->unique()->count() }}</p>
                        <p class="text-xs text-gray-400 mt-1">Categories</p>
                    </div>
                    <div class="w-12 h-12 bg-green-50 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500 mb-1">Latest Year</p>
                        <p class="text-2xl font-light text-gray-800">{{ $books->max('publication_year') ?? 'N/A' }}</p>
                        <p class="text-xs text-gray-400 mt-1">Most recent</p>
                    </div>
                    <div class="w-12 h-12 bg-amber-50 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        @if($books->count() > 0)
             Books Grid
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($books as $book)
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group overflow-hidden">
                         Book Cover/Icon
                        <div class="p-6 pb-4">
                            <div class="w-16 h-16 bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl flex items-center justify-center mb-4 group-hover:from-gray-200 group-hover:to-gray-300 transition-all duration-300">
                                <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>

                             Title and Genre
                            <div class="mb-4">
                                <h3 class="font-medium text-gray-800 text-lg mb-2 line-clamp-2 group-hover:text-gray-900 transition-colors">
                                    {{ $book->title }}
                                </h3>

                                @if($book->genre)
                                    <span class="inline-block px-3 py-1 text-xs font-medium text-gray-600 bg-gray-100 rounded-full">
                                        {{ $book->genre }}
                                    </span>
                                @endif
                            </div>

                             Author
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span class="text-sm text-gray-600 font-medium">{{ $book->author }}</span>
                            </div>

                             Publication Year
                            @if($book->publication_year)
                                <div class="flex items-center gap-2 mb-4">
                                    <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span class="text-sm text-gray-500">{{ $book->publication_year }}</span>
                                </div>
                            @endif

                             Description
                            @if($book->description)
                                <p class="text-sm text-gray-600 line-clamp-3 mb-4 leading-relaxed">
                                    {{ $book->description }}
                                </p>
                            @endif
                        </div>

                         Card Actions
                        <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs text-gray-500 font-medium">
                                {{ $book->added_by ?? 'Unknown' }}
                            </span>

                            <div class="flex gap-2">
                                <a href="{{ route('books.show', $book->id) }}" class="p-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </a>

                                <a href="{{ route('books.edit', $book->id) }}" class="p-2 text-gray-600 hover:text-amber-600 hover:bg-amber-50 rounded-lg transition-all duration-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>

                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this book?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-gray-600 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all duration-200">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

             Pagination
            @if(method_exists($books, 'links'))
                <div class="mt-12 flex justify-center">
                    <div class="bg-white rounded-lg border border-gray-200 p-1">
                        {{ $books->links() }}
                    </div>
                </div>
            @endif

        @else
             Empty State
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>

                <h3 class="text-xl font-light text-gray-800 mb-3">Your library awaits</h3>
                <p class="text-gray-600 mb-8 max-w-md mx-auto leading-relaxed">
                    Start building your personal collection of books. Every great library begins with a single book.
                </p>

                <a href="{{ route('books.create') }}" class="inline-flex items-center px-6 py-3 bg-gray-800 hover:bg-gray-700 text-white rounded-lg font-medium transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Add Your First Book
                </a>
            </div>
        @endif
    </div>
</div>

 Success/Error Messages
@if(session('success'))
    <div class="fixed top-4 right-4 z-50">
        <div class="bg-white border border-green-200 text-green-800 px-4 py-3 rounded-lg shadow-lg flex items-center gap-3">
            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="fixed top-4 right-4 z-50">
        <div class="bg-white border border-red-200 text-red-800 px-4 py-3 rounded-lg shadow-lg flex items-center gap-3">
            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span class="font-medium">{{ session('error') }}</span>
        </div>
    </div>
@endif

<script>
// Auto-hide toast messages
document.addEventListener('DOMContentLoaded', function() {
    const toasts = document.querySelectorAll('.fixed .bg-white');
    toasts.forEach(toast => {
        setTimeout(() => {
            toast.style.opacity = '0';
            toast.style.transform = 'translateX(100%)';
            setTimeout(() => toast.remove(), 300);
        }, 4000);
    });
});

// Add subtle loading states
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function(e) {
        const submitBtn = form.querySelector('button[type="submit"]');
        if (submitBtn) {
            submitBtn.style.opacity = '0.7';
            submitBtn.disabled = true;
        }
    });
});
</script>
@endsection
