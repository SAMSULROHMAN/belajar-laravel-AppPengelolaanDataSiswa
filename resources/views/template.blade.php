<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siswaku</title>
    {{-- Call Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
    <div class="container">
        @include('navbar')
        @yield('main')
    </div>
    @yield('footer')
    <script src="{{ asset('js/jquery-2.2.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
