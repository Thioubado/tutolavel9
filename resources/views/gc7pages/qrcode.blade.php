@extends ('gc7layouts.main')

@section('title')
    QrCode
@endsection

@section('main')
    <h1>QrCode Page</h1><br>

    <p>The Frends page get a QrCode for a person</p>

    <hr><br>

    <p>Please choose another menu link in the main menu above (<i class='qrcode icon'>) </i> <i class="smile outline icon"></i></p>
    <hr>
    NB:
    <ul>
        <li>Qr readers : Links 1 to 9</li>
        <li>Qr scanners: Links 11 to 19</li>
    </ul>

    <p>$data (uri) = null</p>
@endsection
