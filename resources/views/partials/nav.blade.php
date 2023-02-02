<nav>
    <?php
    if (!defined('ROOT')) {
        define('ROOT', './../../');
    }
    define('URI', substr($_SERVER['PATH_INFO'] ?? '/', 1));
    echo URI;
    function is_active($page)
    {
        return $page == URI ? 'active' : '';
    }

    $pages = [
        [
            'GC7' => [
                'gc7users' => 'Users',
                'gc7friends' => 'Friends',
                'gc7qrcode' => 'QrCode',
                'api/friend/grcote7' => 'GrCOTE7',
                'gc7test' => 'Test',
            ],
        ],
    ];
    ?>
    <main>

        <a href="<?= ROOT ?>gc7users" class="<?= is_active('gc7users') ?>">Users</a> |
        <a href="<?= ROOT ?>gc7friends">Friends</a> |
        <a href="<?= ROOT ?>gc7qrcode">QrCode</a> |
        <a href="<?= ROOT ?>api/friend/grcote7">GrCOTE7</a> |
        <a href="<?= ROOT ?>gc7test" class="<?= is_active('gc7test') ?>">Test</a>
        <hr>Momo
        <a href="<?= ROOT ?>about">About</a> |
        <a href="<?= ROOT ?>contact">Contact</a> |
        <a href="<?= ROOT ?>groupemiddleware">Goupe Middleware</a> |
        <a href="<?= ROOT ?>userswithmodel">Users with model</a> |
        <a href="<?= ROOT ?>httprequest">Http request Method</a> |
        <a href="<?= ROOT ?>sessionlogin">Session Login</a> |
        <a href="<?= ROOT ?>showlist">Show list</a> |
        <a href="<?= ROOT ?>pagination">Pagination with DB</a> |
        <a href="<?= ROOT ?>save">Save data in DB</a>
    </main>
</nav>

{{-- @include('partials.nav_block', ['nav_color'=>'brown', 'pages'=>$gc7Pages]); --}}
