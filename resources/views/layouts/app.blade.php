<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app"  style="background-image: url('/')">
        @include('inc.navbar')
        <div class="container mx-auto">
            @include('inc.messages')
        </div>


        @yield('content')
    </div>
    @include('inc.footer')


    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error=>{
            console.error(error);
        });                                             
    </script>
</body>
</html>
