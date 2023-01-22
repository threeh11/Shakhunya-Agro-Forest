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
<body class="h-screen flex min-h-screen flex-col justify-between">
    @if (session()->has('error'))
        <div class="alert alert-error shadow-lg w-min whitespace-nowrap my-6 flex justify-center absolute left-0 right-0 mx-auto slide-card z-50">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ session()->get('error') }}</span>
            </div>
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success shadow-lg w-min whitespace-nowrap my-6 flex justify-center absolute left-0 right-0 mx-auto slide-card z-50">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ session()->get('success') }}</span>
            </div>
        </div>
    @endif

    @include('includes.header')
    @yield('content')
    @include('includes.footer')
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
@vite('resources/js/product.js')
</html>

