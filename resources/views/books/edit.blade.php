@extends('layouts.master')

@section('title', 'Edit Book - Tech Bookstore')

@section('content')
<h2 class="text-2xl font-bold mb-6">Edit Book</h2>

<form action="{{ route('books.update', $book->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <!-- Title Field -->
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Book Title</label>
        <input 
            type="text" 
            name="title" 
            id="title" 
            value="{{ old('title', $book->title) }}" 
            class="mt-1 block w-full rounded-md border p-2 focus:ring-indigo-500 focus:border-indigo-500 @error('title') border-red-500 @else border-gray-300 @enderror"
        >
        @error('title')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Author Field -->
    <div>
        <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
        <input 
            type="text" 
            name="author" 
            id="author" 
            value="{{ old('author', $book->author) }}" 
            class="mt-1 block w-full rounded-md border p-2 focus:ring-indigo-500 focus:border-indigo-500 @error('author') border-red-500 @else border-gray-300 @enderror"
        >
        @error('author')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Price Field -->
    <div>
        <label for="price" class="block text-sm font-medium text-gray-700">Price ($)</label>
        <input 
            type="number" 
            step="0.01" 
            name="price" 
            id="price" 
            value="{{ old('price', $book->price) }}" 
            class="mt-1 block w-full rounded-md border p-2 focus:ring-indigo-500 focus:border-indigo-500 @error('price') border-red-500 @else border-gray-300 @enderror"
        >
        @error('price')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Category Dropdown -->
    <div>
        <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
        <select 
            name="category_id" 
            id="category_id" 
            class="mt-1 block w-full rounded-md border p-2 focus:ring-indigo-500 focus:border-indigo-500 @error('category_id') border-red-500 @else border-gray-300 @enderror"
        >
            <option value="">Select a Category</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="pt-2 flex space-x-3">
        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded hover:bg-indigo-700">
            Update Book
        </button>
        <a href="{{ route('books.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">
            Cancel
        </a>
    </div>
</form>
@endsection