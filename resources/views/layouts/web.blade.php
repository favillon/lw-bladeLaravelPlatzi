<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" class="href">
</head>
<body>
    <header class="shadow-lg">
        <div class="bg-blue-900">
            <nav class="bg-blue-800 py-2">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png')}}" alt="" class="h-20 mx-auto" />
                </a>
            </nav>
        </div>
    </header>

    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <footer class="py-4 text-center">
        @auth
            <a href="{{ url('dasboard') }}" class="text-sm text-gray-700 underline">
                Dasboard
            </a>
        @else
            <a href="{{ url('login') }}" class="text-sm text-gray-700 underline">
                Login
            </a>
            <a href="{{ url('register') }}" class="px-4 text-sm text-gray-700 underline">
                Register
            </a>
        @endif
    </footer>
</body>
</html>