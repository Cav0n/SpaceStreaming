<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- App CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Space Streaming</title>
</head>
<body>
    <script src="{{asset('js/app.js')}}"></script>

    <h1>BIENVENUE SUR SPACE STREAMING</h1>

    @yield('content')
</body>
</html>
