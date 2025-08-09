@extends('layouts.app')

@section('title', 'Add New Book')

@section('content')
<div class="max-w-2xl mx-auto">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-base-content mb-2">📚 Add New Book</h1>
        <p class="text-base-content/70">Expand your learning collection</p>
    </div>

    <!-- Form Card -->
    <div class="card bg-base-100 shadow-lg">
        <div class="card-body">
            <form action="{{ route('books.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Title -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">Book Title *</span>
                    </label>
                    <input type="text" name="title" class="input input-bordered w-full"
                           placeholder="Enter book title..." required value="{{ old('title') }}">
                    @error('title')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <!-- Author -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">Author *</span>
                    </label>
                    <input type="text" name="author" class="input input-bordered w-full"
                           placeholder="Enter author name..." required value="{{ old('author') }}">
                    @error('author')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <!-- Two Column Layout for Year and Genre -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Publication Year -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text font-medium">Publication Year</span>
                        </label>
                        <input type="number" name="publication_year" class="input input-bordered w-full"
                               placeholder="2024" min="1000" max="{{ date('Y') }}" value="{{ old('publication_year') }}">
                        @error('publication_year')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Genre -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text font-medium">Genre</span>
                        </label>
                        <select name="genre" class="select select-bordered w-full">
                            <option value="">Select genre...</option>
                            <option value="Programming" {{ old('genre') == 'Programming' ? 'selected' : '' }}>Programming</option>
                            <option value="Web Development" {{ old('genre') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                            <option value="Design" {{ old('genre') == 'Design' ? 'selected' : '' }}>Design</option>
                            <option value="UX/UI" {{ old('genre') == 'UX/UI' ? 'selected' : '' }}>UX/UI</option>
                            <option value="Technology" {{ old('genre') == 'Technology' ? 'selected' : '' }}>Technology</option>
                            <option value="Other" {{ old('genre') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('genre')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">Description</span>
                    </label>
                    <textarea name="description" class="textarea textarea-bordered h-24"
                              placeholder="Brief description of the book...">{{ old('description') }}</textarea>
                    @error('description')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <!-- Actions -->
                <div class="card-actions justify-between pt-6">
                    <a href="{{ route('books.index') }}" class="btn btn-outline">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Back to Books
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-plus mr-2"></i>
                        Add Book
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
