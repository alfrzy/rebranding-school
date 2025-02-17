<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 text-white flex justify-between items-center">
        <a href="{{ url('/dashboard') }}" class="font-bold text-lg">Dashboard</a>
        
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-500 px-4 py-2 rounded text-white hover:bg-red-700">
                Logout
            </button>
        </form>
    </nav>

    <div class="container mx-auto mt-4">
        @yield('content')
    </div>
</body>
</html>
