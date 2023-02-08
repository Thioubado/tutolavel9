@extends ('gc7layouts.main')

@section('title')
    QrCode
@endsection

@section('main')
    <h1>QrCode Page</h1><br>

    <p>The Friends page get a QrCode for a person in a list</p>

    <hr><br>

    <p>Please choose another menu link in the main menu above (<i class='qrcode icon'>) </i> <i class="smile outline icon"></i></p>
    <hr>
    NB: Qr scanners list in working
    <ol>
        <li>HTML-5 JS: JS librairy with several troubles - I.e.:<br>
        Scan only some QR Codes - Extremly memory greedy</li>
        <br>
        <li>In work</li>
    </ol>

    <p>$data (uri) = {{$data ?? 'Root'}}</p>
@endsection
