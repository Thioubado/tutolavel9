<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | L9Vite</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/semantic.min.css">
    <script src="assets/js/jquery363.min.js"></script>
    <script src="assets/js/semantic.min.js"></script>
    <link rel="stylesheet" href="assets/css/semantic.min.css">
    @vite(['./public/assets/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.nav')

    <main>
        @yield('main')
    </main>

    <hr>
    <div id="footer">
        Footer
    </div>
</body>

</html>
