    <?php
    define('URI', substr($_SERVER['PATH_INFO'] ?? '/', 1));
    if (!defined('ROOT')) {
        define('ROOT', './../../');
    }

    // echo URI;
    function is_active($page)
    {
        return $page == URI ? 'active' : '';
    }

    $menus = [
        'GC7' => [
            'owner' => 'GC7',
            'color' => 'brown',
            'pages' => [
                'gc7users' => 'Users',
                'gc7friends' => 'Friends',
                'gc7qrcode' => 'QrCode',
                'api/friend/grcote7' => 'GrCOTE7',
                'gc7test' => 'Test',
            ],
        ],
        'Momo' => [
            'owner' => 'Momo',
            'color' => 'yellow',
            'pages' => [
                'about' => 'About',
                'contact' => 'Contact',
                'groupemiddleware' => 'Middleware',
                'userswithmodel' => 'User',
                'httprequest' => 'HttpRequest',
                'sessionlogin' => 'Session Login',
                'showlist' => 'Show list',
                'pagination' => 'DB Pagination',
                'save' => 'Save data in DB',
            ],
        ],
    ];
    ?>

    @include('partials.nav_blocks', ['menus' => $menus])
