<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title' , 'عارضه یابی')</title>
    @vite(['resources/js/app.js'])
</head>
<body style="direction: rtl">
{{--@dd(auth()->user());--}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">ماژول عارضه یابی متوسط</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/">صفحه اصلی</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('diagnostics') }}"> بنگاه متوسط</a>
            </li>
            @if(auth()->check())
                <li class="nav-item">
                    <a class="nav-link" href="/logout">خروج</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">ورود</a>
                </li>

            @endif


        </ul>
    </div>
</nav>
<div id="app">
    <div class="container mt-xxl-5">
        @yield('content')
    </div>

</div>


</body>
</html>
