<!doctype html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title', env('APP_NAME'))</title>
</head>
<body class="flex flex-col justify-between h-screen min-h-screen">
    @if (session()->has('error'))
        <div class="absolute left-0 right-0 z-50 flex justify-center mx-auto my-6 shadow-lg alert alert-error w-min whitespace-nowrap slide-card">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ session()->get('error') }}</span>
            </div>
        </div>
    @endif

    @if (session()->has('success'))
        <div class="absolute left-0 right-0 z-50 flex justify-center mx-auto my-6 shadow-lg alert alert-success w-min whitespace-nowrap slide-card">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ session()->get('success') }}</span>
            </div>
        </div>
    @endif

    @include('includes.header')
    @yield('content')
    @include('includes.footer')
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.cookie.js"></script>

@vite('resources/js/product.js')
@vite('resources/js/saveReviews.js')
</html>

