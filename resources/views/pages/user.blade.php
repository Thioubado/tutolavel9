@extends ('layouts.main')

@section('title')
    Users
@endsection

@section('main')
    <h1>Users Page</h1>
    <h3>Users list</h3>
    <p>
        @foreach ($users as $user)
            {{ $user->name }}<br>
        @endforeach
    </p>
    <p>Data: {{ $users[0]->name }}</p>
@endsection
