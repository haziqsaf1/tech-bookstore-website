<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Bookstore</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 p-8 flex flex-col items-center min-h-screen">

    <!-- Header -->
    @include('layouts.header')

    <!-- Main Content -->
    <main class="w-full max-w-4xl mx-auto bg-white p-6 rounded shadow flex-grow">
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>