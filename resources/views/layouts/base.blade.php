<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title', env('APP_NAME'))</title>
</head>
<body class="flex min-h-screen flex-col justify-between">
    @include('includes.header')
    @yield('content')
    <footer class="flex bg-head">
        @include('includes.footer')
    </footer>
</body>
</html>