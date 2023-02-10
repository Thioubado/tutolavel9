@extends ('gc7layouts.main')

@section('title')
    QrCode5
@endsection

@section('main')
    <h1>QrCode5 Page</h1>
    <p>Ready.</p>

    @php
        echo $data;
    @endphp

    <script type="module">
        window.addEventListener('DOMContentLoaded', (event) => {
            console.log('Ready for ...')
        })
    </script>

@endsection
