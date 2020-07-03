<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name = "csrf_token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
      <title>All the polls go here!</title>
    </head>
    <body id = "about">

           <div id = "app" class="container">
          
              <polls></polls>
           </div>

           <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
