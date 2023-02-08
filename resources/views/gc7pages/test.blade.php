@extends ('gc7layouts.main')
@section('title')
    Test
@endsection

@section('main')
<style>
    .two-block {
        /* border: 1px solid red; */
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .case {
        align-items: center;
        /* border: 1px solid blue; */
    }
    </style>

<h1>Test Page</h1>


@php
    use App\Http\Tools\Gc7;
    // $data=$menus;
    Gc7::aff($data, '$data');
@endphp

@endsection
