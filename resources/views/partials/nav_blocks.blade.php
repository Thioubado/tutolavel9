<?php
use App\Http\Tools\Gc7;
use Barryvdh\Debugbar\Facades\Debugbar as DebugbarGc7;
?>

@foreach ($menus as $menu)
    {{--
    {{ $menu['owner'] }}
    {{ $menu['color'] }}
    --}}

    <div class="ui {{ $menu['color'] }} three inverted menu">
        <div class="header item">
            <a href="/" class="<?= isActive('') ?>">{{ $menu['owner'] }}</a>&nbsp;(@php echo ucfirst(env('APP_ENV', 'prod')); @endphp)
        </div>
        @foreach ($menu['pages'] as $uri => $page)
            {{-- {{$loop->iteration}} --}}
            @php
            $mainLink='';
            if ($uri=='gc7qrcode') {
                // DebugBarGc7::addMessage($page);
                // DebugBarGc7::addMessage(URI, substr(URI, 0, 5));
                // DebugBarGc7::addMessage($uri, substr($uri, 0, 5));
                // $mainLink = ' active';
                ?>
                <div class="ui dropdown" id="dropdownMenu">
                    <input type="hidden" name="QrCode">
                    <span class="item" id="mainDropdownLink">
                        <i class="qrcode icon"></i>
                    </span>
                    <div class="menu">
                        <?php
                        require_once ('./../app/Http/Tools/Gc7.php');
                        // Gc7::aff($page);

                        foreach ($page as $submenu => $link) {
                            // if ($submenu) echo '<optgroup label="'.$submenu.'" style="margin-left:7px"></optgroup>';

                            foreach ($link as $uri => $item) {
                                $selected='';
                                // echo $uri.' → '.$item;
                                if ($uri==URI) {
                                    $selected = ' active';
                                    $activeMainLink = true;
                                }
                                echo '<div class="item'.($selected??'').'" data-value="'.$uri.'"><a href="'.ROOT.$uri.'" style="color:#333">'.$item.'</a></div>';
                            }
                        }
                         ?>
                    </div>
                </div>
            <?php
            } else {
                ?>
                <a href="<?= ROOT . $uri ?>" class="item<?= isActive($uri) ?>"><?= $page ?></a>
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
        $('.ui.dropdown').mouseover (function(){
            $('.ui.dropdown').dropdown({on:'hover'})
        });
        // For automatically show the dropdown
        // $('.ui.dropdown').dropdown()

        const mainDropdownLink = document.getElementById('mainDropdownLink')
        if (<?php echo json_encode($activeMainLink??null); ?>) mainDropdownLink.classList.add('active')
    });
</script>
