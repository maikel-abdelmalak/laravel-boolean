<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('page-name')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('main')
        </main>

        @include('partials.footer')
    </body>
</html>
