@extends ('gc7layouts.main')

@section('title')
    http request
@endsection

@section('main')
    <h1>Http Request Page</h1>

    <form action="loginrequest" method="POST">
        @csrf
        <input type="text" name='first_name' placeholder='Put your first name'><br><br>
        <input type="text" name='Last_name' placeholder='Put your last name'><br><br>
        <input type="email" name='email' placeholder='Put your email adress'><br><br>
        <input type="password" name='password' placeholder='Put your password'><br><br>
        <button type = 'submit'>Login</button>
    </form>
@endsection
