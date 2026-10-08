<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }} - Tech Bookstore</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 p-8">

    <!-- Header Navigation -->
    <header class="max-w-4xl mx-auto mb-6 flex justify-between items-center bg-white p-4 rounded shadow">
        <h1 class="text-xl font-bold text-indigo-600">📚 TechBookStore</h1>
        <nav class="space-x-4">
            <a href="{{ route('books.index') }}" class="hover:underline">Home</a>
            <a href="{{ route('books.index') }}" class="hover:underline">All Books</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
        <a href="{{ route('books.index') }}" class="text-sm text-gray-500 hover:underline">← Back to Catalog</a>

        <div class="mt-4">
            <h2 class="text-3xl font-bold text-gray-800">{{ $book->title }}</h2>
            <p class="text-lg text-gray-600 mt-1">Written by {{ $book->author }}</p>
            
            <!-- Category Badge -->
            @if($book->category)
                <div class="mt-2 inline-block bg-blue-100 text-blue-800 font-medium px-3 py-1 rounded-full text-sm">
                    Category: {{ $book->category->name }}
                </div>
            @endif

            <!-- Description -->
            <div class="mt-4 text-gray-700 leading-relaxed">
                {{ $book->description }}
            </div>

            <!-- Price Badge -->
            <div class="mt-4 inline-block bg-green-100 text-green-800 font-bold px-3 py-1 rounded">
                Price: ${{ number_format($book->price, 2) }}
            </div>
        </div>
    </main>

</body>
</html>