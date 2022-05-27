<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>🚧 Lava - @yield('title')</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body class="app__body">
    @include('partials.sidebar')
    @yield('content')
    <script src="js/app.js"></script>
</body>
</html>