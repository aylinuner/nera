<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        
        @yield('page_title')

    </title>
        @vite(['resources/css/app.scss', 'resources/js/app.js']) {{-- Bütün sayfalarda çağrılan SCSS ve JS'ler --}}
        
        @yield('page_head_css') {{-- Sayfaya özel SCSS'ler --}}

</head>
<body>
    <script src="{{ asset('jQuery.js') }}"></script>{{-- jQuery --}}
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    @yield('page_body_js') 
</body>
</html>