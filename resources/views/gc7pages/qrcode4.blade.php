@extends ('gc7layouts.main')

@section('title')
    QrCode4
@endsection

@section('main')
    <h1>QrCode4 Page</h1>
    <p>Barcode Scanner (...)</p>

    @php
        echo $data;
    @endphp

    <script type="module">
        window.addEventListener('DOMContentLoaded', (event) => {
        console.log('Ready for barcode')
        })
    </script>
@endsection
