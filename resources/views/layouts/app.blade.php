<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name = "csrf_token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
       <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
       @include('includes.navbar')
       <div>
         @include('includes.story')
       </div>
       
    </head>
    <body>

           <div id = "app">
          	@yield('content')
              
           </div>

           <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
