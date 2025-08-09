@extends('layouts.app')

@section('title', 'Add New Film')

@section('content')
<div class="max-w-2xl mx-auto">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-base-content mb-2">🎬 Add New Film</h1>
        <p class="text-base-content/70">Add to your film collection</p>
    </div>

    <!-- Form Card -->
    <div class="card bg-base-100 shadow-lg">
        <div class="card-body">
            <form action="{{ route('films.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Title -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">Film Title *</span>
                    </label>
                    <input type="text" name="title" class="input input-bordered w-full"
                           placeholder="Enter film title..." required value="{{ old('title') }}">
                    @error('title')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <!-- Director -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text font-medium">Director *</span>
                    </label>
                    <input type="text" name="director" class="input input-bordered w-full"
                           placeholder="Enter director name..." required value="{{ old('director') }}">
                    @error('director')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <!-- Three Column Layout -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Release Year -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text font-medium">Release Year</span>
                        </label>
                        <input type="number" name="release_year" class="input input-bordered w-full"
                               placeholder="2024" min="1900" max="{{ date('Y') + 5 }}" value="{{ old('release_year') }}">
                        @error('release_year')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Duration -->
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text font-medium">Duration (min)</span>
                        </label>
                        <input type="number" name="duration" class="input input-bordered w-full"
                               placeholder="120" min="1" value="{{ old('duration') }}">
                        @error('duration')
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
                            <option value="Action" {{ old('genre') == 'Action' ? 'selected' : '' }}>Action</option>
                            <option value="Comedy" {{ old('genre') == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                            <option value="Drama" {{ old('genre') == 'Drama' ? 'selected' : '' }}>Drama</option>
                            <option value="Horror" {{ old('genre') == 'Horror' ? 'selected' : '' }}>Horror</option>
                            <option value="Sci-Fi" {{ old('genre') == 'Sci-Fi' ? 'selected' : '' }}>Sci-Fi</option>
                            <option value="Romance" {{ old('genre') == 'Romance' ? 'selected' : '' }}>Romance</option>
                            <option value="Thriller" {{ old('genre') == 'Thriller' ? 'selected' : '' }}>Thriller</option>
                            <option value="Documentary" {{ old('genre') == 'Documentary' ? 'selected' : '' }}>Documentary</option>
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
                              placeholder="Brief description of the film...">{{ old('description') }}</textarea>
                    @error('description')
                        <label class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </label>
                    @enderror
                </div>

                <!-- Actions -->
                <div class="card-actions justify-between pt-6">
                    <a href="{{ route('films.index') }}" class="btn btn-outline">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Back to Films
                    </a>

                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-plus mr-2"></i>
                        Add Film
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
