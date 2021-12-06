<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/styles.css">

    <script src="/js/scripts.js"></script>

</head>

<body>
    @yield('content')
    <footer>
        <p> João SH &copy; 2021 </p>
    </footer>

</body>

</html>