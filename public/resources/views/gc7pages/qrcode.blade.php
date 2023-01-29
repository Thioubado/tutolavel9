@extends ('gc7layouts.main')

@section('title')
    QrCode
@endsection

@section('main')
    <h1>QrCode Page</h1>
    Reader
    <div id="reader"></div>
    <p>Data: {{ $data }}</p>
    Result
    <div id="qr-reader" style="width: 600px"></div>
    <script src="./resources/js/html5-qrcode.min.v2.3.4.js"></script>
@endsection
