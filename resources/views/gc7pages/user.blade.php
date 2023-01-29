@extends ('gc7layouts.prod')

@section('title')
    Users
@endsection

@section('main')
    <h1>Users Page</h1>
    <h3>One User randomly</h3>
    <a href="gc7users">
        <button>Clic here for refresh this page to obtain perhaps another user below</button>
    </a>
    <p>
        @foreach ($users as $user)
            {{ $user->name }}<br>
        @endforeach
    </p>
    <p>Data: {{ $users[0]->name }}</p>
@endsection
