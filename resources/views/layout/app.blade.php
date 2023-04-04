<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
    <meta name="description" content="@yield('description')">
</head>

<body class="main__body">
<!-- Header -->
@include('layout.includes.header')

<!-- Main Page -->
<main>
    @yield('content')
</main>

@include('layout.includes.footer')

</body>

<script src="{{ asset('assets/js/scripts.js') }}"></script>

</html>