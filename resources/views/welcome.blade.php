<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>First Practice</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>

    <body>
        <div id="app" >
            @yield('content')
        </div>
    </body>
    <script type="module">
        import Vue from 'https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.esm.browser.js'
    </script>
    <script type="text/javascript"
        src="{{ mix('/js/app.js') }}">
    </script>
            
    <link href="/css/app.css" rel="stylesheet">
</html>
