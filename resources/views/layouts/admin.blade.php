<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <!-- CSS dosyaları -->
    <link href="{{ asset('front/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <!-- Header -->
    <header>
        <nav class="bg-gray-800 text-white py-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ route('intro') }}" class="text-2xl font-bold">Cafe Uygulaması</a>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('adminpanel') }}" class="hover:underline">Admin Paneli</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} Cafe Uygulaması. Tüm Hakları Saklıdır.</p>
        </div>
    </footer>

    <!-- JS dosyaları -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
