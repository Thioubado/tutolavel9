<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | L10Vite</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    @vite([
        './public/assets/css/semantic.min.css',
        './public/assets/css/app.css',
        './public/assets/js/jquery363.min.js',
        './public/assets/js/semantic.min.js',
        'resources/js/app.js'
    ])
</head>

<body>


    <main>
        @yield('main')
    </main>

    <hr>
    Footer
</body>

</html>
