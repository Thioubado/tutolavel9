@foreach ($menus as $menu)
    {{--
    {{ $menu['owner'] }}
    {{ $menu['color'] }}
    --}}

    <div class="ui {{ $menu['color'] }} three inverted menu">
        <div class="header item">
            <a href="/" class="<?= is_active('') ?>">{{ $menu['owner'] }}</a>&nbsp;(@php echo ucfirst(env('APP_ENV', 'prod')); @endphp)
        </div>
        @foreach ($menu['pages'] as $uri => $page)
            {{-- {{$loop->iteration}} --}}
            <a href="<?= ROOT . $uri ?>" class="item<?= is_active($uri) ?>"><?= $page ?></a>
            @if ($loop->iteration % 7 > 5)
                </div>
                <div class="ui {{ $menu['color'] }} three inverted menu">
            @endif
        @endforeach
    </div>
@endforeach
