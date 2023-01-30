@extends ('gc7layouts.main')

@section('title')
    Session Login
@endsection

@section('main')
    <h1>Profile Session Page</h1>
    <h2>Hello, {{session('first_name')}}</h2>

    <a href="/logout">logout</a>

@endsection
