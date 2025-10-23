<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking System</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link rel="icon" href="../images/five-stars.png">
    @yield('styles')
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partials.footer')
    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
