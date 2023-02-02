<div class="ui {{ $nav_color }} three inverted menu">
    <div class="header item">
        <a href="/" class="<?= is_active('') ?>">GC7</a>&nbsp;(@php echo ucfirst(env('APP_ENV', 'prod')); @endphp)
    </div>
    @foreach ($pages as $uri => $page)
        {{-- {{$loop->iteration}}  --}}
        <a href="<?= ROOT . $uri ?>" class="item <?= is_active($uri) ?>"><?= $page ?></a>
        @if ($loop->iteration % 6 > 4)
            </div>
            <div class="ui brown three inverted menu">
        @endif
    @endforeach
</div>
