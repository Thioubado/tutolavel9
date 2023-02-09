@extends ('gc7layouts.main')

@section('title')
    QrCode2
@endsection

@section('main')
    <h1>QrCode3 Page</h1>
    <p>Third Codes Scanner (Zxing)</p>
    {{-- <p>https://github.com/zxing/zxing</p> --}}

    @php
        echo $data;
    @endphp

    <script type="module">
        window.addEventListener('DOMContentLoaded', (event) => {
        console.log('Ready for Zxing')
        })
    </script>
@endsection
