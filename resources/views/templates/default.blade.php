<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- App CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    {{-- VideoJS CSS --}}
    <link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css" />

    <title>Space Streaming</title>
</head>
<body class="bg-dark text-light">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.plyr.io/3.5.10/plyr.polyfilled.js"></script>

    @include('components.header')

    <main class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                @yield('content')
            </div>
        </div>
    </main>

    <footer>

    </footer>

</body>
</html>
