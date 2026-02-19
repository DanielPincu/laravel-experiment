<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white border-b mb-6">
        <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">
            <a href="/" class="font-semibold">Product Management</a>

            <div class="flex items-center gap-4">
                @auth
                    <span class="text-sm text-gray-600">Hi, {{ auth()->user()->name }}</span>
                    <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline">Dashboard</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-red-600 hover:underline">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
                    <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-4">
        @yield('content')
    </main>
</body>
</html>
