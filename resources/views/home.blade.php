<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Tech Bookstore</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 p-8">

    <!-- Header Navigation -->
    <header class="max-w-4xl mx-auto mb-6 flex justify-between items-center bg-white p-4 rounded shadow">
        <h1 class="text-xl font-bold text-indigo-600">📚 TechBookStore</h1>
        <nav class="space-x-4">
            <a href="{{ route('home') }}" class="font-bold text-indigo-600">Home</a>
            <a href="{{ route('books.index') }}" class="hover:underline">All Books</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Welcome to Our Store!</h2>
        <p class="mb-4 text-gray-600">Check out our featured tech titles below:</p>

        <ul class="space-y-2">
            @foreach ($featuredBooks as $book)
                <li class="p-3 bg-indigo-50 border border-indigo-200 rounded flex justify-between items-center">
                    <span><strong>{{ $book['title'] }}</strong> by {{ $book['author'] }}</span>
                    <a href="{{ route('books.show', $book['id']) }}" class="text-indigo-600 hover:underline">
                        View Details →
                    </a>
                </li>
            @endforeach
        </ul>
    </main>

    @extends('layouts.master')


@section('title', 'Home')


@section('content')
    <h2 class="text-2xl font-bold mb-4">Welcome to Our Store!</h2>
    <p class="mb-4 text-gray-600">Check out our featured tech titles below:</p>
   
    <ul class="space-y-2">
        @foreach ($featuredBooks as $book)
            <li class="p-3 bg-indigo-50 border border-indigo-200 rounded flex justify-between items-center">
                <span><strong>{{ $book['title'] }}</strong> by {{ $book['author'] }}</span>
                <a href="{{ route('books.show', $book['id']) }}" class="text-indigo-600 hover:underline">
                    View Details →
                </a>
            </li>
        @endforeach
    </ul>
@endsection

</body>
</html>

