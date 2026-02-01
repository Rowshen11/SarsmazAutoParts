<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Awtoşaýlar dükany')</title>
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap-icons.min.css") }}">
    <style>body{padding-top: 70px;}</style>
</head>

<body>
    @include('layouts.partials.header')
    <main class="container">
        @yield('content')
    </main>
@include('layouts.partials.footer')
<script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
</body>
</html>