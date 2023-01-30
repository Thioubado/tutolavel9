@extends ('gc7layouts.main')
@section('title')
    Test
@endsection

@section('main')
    <h1>Test Page</h1>
    <p style="text-align: center">
        @php
        echo $data
        @endphp
    </p>
    <p>Data original:<br>
    {{ $data }}</p>
@endsection
