<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name = "csrf_token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
       <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
       @include('includes.navbar')

       @guest
       <div>
         @include('includes.story')
       </div>
       @endguest
    </head>
    <body>

           <div id = "app">
          	@yield('content')
              
           </div>

           <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
           {{-- <footer class="p-1 text-white text-center"><a href = "https://github.com/GabielFemi" class="text-caps">This bug🐞was created by  Gabriel Akinyosoye</a></footer> --}}
    </body>
</html>
