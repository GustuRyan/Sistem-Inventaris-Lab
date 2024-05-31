<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>
        @yield('page')
    </title>
    <link rel="icon" href="/assets/img/SIIL-Rounded.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Rhodium+Libre&display=swap" rel="stylesheet">
    <style>
        .font-rhodium {
            font-family: 'Rhodium Libre', serif;
        }
    </style>
</head>

<body>
    <div>
        @include('user.components.navbar')
        <div>
            @yield('contents')
        </div>
        @include('user.components.footer')
    </div>
</body>

</html>
