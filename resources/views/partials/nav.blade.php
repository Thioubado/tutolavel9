<nav>
    <?php
    if (!defined('ROOT')) {
        define('ROOT', './../../');
    }
    ?>
    <main>
        <a href="/">Home</a> (@php echo ucfirst(env('APP_ENV', 'prod')); @endphp)
        <hr>GC7
        <a href="<?= ROOT ?>gc7users">Users</a> |
        <a href="<?= ROOT ?>gc7friends">Friends</a> |
        <a href="<?= ROOT ?>gc7qrcode">QrCode</a> |
        <a href="<?= ROOT ?>api/friend/grcote7">GrCOTE7</a> |
        <a href="<?= ROOT ?>gc7test">Test</a>
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
<hr>
