<header class="w-full max-w-4xl mx-auto mb-6 flex justify-between items-center bg-white p-4 rounded shadow">
    <!-- Brand Title -->
    <h1 class="text-xl font-bold text-indigo-600">
        <a href="{{ route('books.index') }}" class="flex items-center gap-2">
            📚 TechBookStore
        </a>
    </h1>

    <!-- Navigation Links -->
    <nav class="flex items-center space-x-6">
        <a href="{{ url('/') }}" class="text-gray-600 hover:text-indigo-600 font-medium">Home</a>
        <a href="{{ route('books.index') }}" class="font-bold text-indigo-600">All Books</a>
        <a href="{{ route('books.create') }}" class="bg-indigo-600 text-white px-3 py-1.5 rounded text-sm hover:bg-indigo-700 font-medium">
            + Add Book
        </a>
    </nav>
</header>