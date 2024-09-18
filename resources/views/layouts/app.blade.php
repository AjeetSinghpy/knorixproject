<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My Laravel App')</title>

    <!-- Include CSS files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    @stack('styles') <!-- Additional styles if necessary -->
</head>
<body>
    <!-- Navbar -->
    <nav>
        <!-- Navigation links -->
    </nav>

    <!-- Main content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <!-- Footer content -->
    </footer>

    <!-- Include JavaScript files -->
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts') <!-- Additional scripts if necessary -->
</body>
</html>
