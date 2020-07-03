<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <title>Mapoly Student Union Government | Election application</title>
      <meta name = "csrf_token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
       <link rel = "stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
       
    </head>
    <body id = "home">

           <div id = "app" class="container">
              <welcome></welcome>
           </div>

           <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
