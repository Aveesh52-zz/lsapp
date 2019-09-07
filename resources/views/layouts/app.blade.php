<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LSAPP') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        @include('inc.navbar')
        @include('inc.message')
         <div class="container">  
           @yield('content')
         </div>
     
     
         <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
         <script>
             CKEDITOR.replace( 'article-ckeditor' );
         </script>
     

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>



