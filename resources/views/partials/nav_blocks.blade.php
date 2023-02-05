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
            @php
            if ($uri=='qrcode') {
                ?>
                <div class="ui dropdown">
                    <input type="hidden" name="QrCode">
                    <span class="item">
                        <i class="qrcode icon"></i>
                    </span>
                    <div class="menu">
                        <div class="item" data-value="v1"><a href="./../../gc7qrcode" style="color:#333">Les QrCodes</a></div>
                        <div class="item" data-value="v1"><a href="./../../gc7qrcode/1" style="color:#333">Version 1</a></div>
                        <div class="item" data-value="v2"><a href="./../../gc7qrcode/2" style="color:#333">Version 2</a></div>
                    </div>
                </div>
                <?php
            } else{
                ?>
                <a href="<?= ROOT . $uri ?>" class="item<?= is_active($uri) ?>"><?= $page ?></a>
                <?php
            }
            @endphp

            @if ($loop->iteration % 7 > 5)
            </div>
            <div class="ui {{ $menu['color'] }} three inverted menu">
@endif
@endforeach
</div>
@endforeach

<script>
    window.addEventListener('DOMContentLoaded', (event) => {

        $('.ui.dropdown')
  .dropdown()
;

        $('.clearable.example .ui.selection.dropdown')
            .dropdown({
                clearable: true
            });
        $('.clearable.example .ui.inline.dropdown')
            .dropdown({
                clearable: true,
                placeholder: 'any'
            });

        $('.upward.example .dropdown')
            .dropdown({
                direction: 'upward'
            });
    });
</script>
