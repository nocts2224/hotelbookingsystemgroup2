<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking System</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
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
