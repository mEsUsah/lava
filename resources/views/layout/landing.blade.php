<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>🚧 Lava - Welcome!</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="landingpage__body">
    <img src="/images/landing.jpg" alt="lava" class="landingpage__background">
    <div class="landingpage__wrapper">
        <img src="svg/haxor-logo-only-white.svg" alt="" class="landingpage__logo">
        <h1 class="text-center">Lava</h1>
        @yield('content')
    </div>
    <div class="landingpage__imagecredit">
        <a href="https://unsplash.com/@stilltane4ka">Photo by Tanya Grypachevskaya on Unsplash</a>
    </div>
    
</body>
</html>