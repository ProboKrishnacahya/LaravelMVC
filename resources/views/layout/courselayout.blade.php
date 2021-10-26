<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    {{-- External CSS public/assets/css/style.css --}}
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css" />
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap" rel="stylesheet">
    {{-- Favicon --}}
    <link rel="icon" href="{{ url('assets/img/logo.svg?v=2') }}" type="image/svg" />
    {{-- Title --}}
    <title>@yield("title")</title>
</head>

<body class="bg-dark text-white">
    {{-- Header --}}
    <nav class="navbar navbar-expand-lg bg-black user-select-none">
        <a class="navbar-brand ms-4" href="/"><img src="{{ url('assets/img/logo.svg?v=2') }}" class="pe-2" alt="Logo">SAA1&hyphen;0706012010039</a>
        @include('layout.navigation')
    </nav>

    {{-- Konten website --}}
    <div class="container my-5">
        <h1 class="fw-bold">@yield("pagetitle")</h1>
        @yield('main_content')
    </div>

    {{-- Footer --}}
    <nav class="navbar navbar-expand-lg bg-black text-white fixed-bottom py-3 justify-content-center user-select-none">
        Copyright <a href="/">&nbsp;Project Catalog&nbsp;</a> &copy; 2021
    </nav>

    {{-- Bootstrap CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
