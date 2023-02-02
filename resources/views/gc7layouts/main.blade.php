<!DOCTYPE html>
<html lang="fr">
    <?php
    define ('ROOT', './../../');
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | L9Vite</title>
    <link rel="icon" href="<?= ROOT ?>favicon.ico" type="image/x-icon" />

    @if (env('APP_ENV')=='prod')
        <link rel="stylesheet" href='<?= ROOT ?>public/assets/css/semantic.min.css'>
        <link rel="stylesheet" href='<?= ROOT ?>public/assets/css/app.css'>
        <script src='<?= ROOT ?>public/assets/js/jquery363.min.js'></script>
        <script src='<?= ROOT ?>public/assets/js/semantic.min.js'></script>
        <script src='<?= ROOT ?>public/assets/js/app.js'></script>
    @else
    @vite([
        './public/assets/css/semantic.min.css',
        './public/assets/css/app.css',
        './public/assets/js/jquery363.min.js',
        './public/assets/js/semantic.min.js',
        './public/assets/js/app.js'
    ])
    @endif
</head>

<body>

    @include('partials.nav')

    <main>
        @yield('main')
    </main>

    <hr>
    <footer>
        Footer
    </footer>
</body>

</html>
