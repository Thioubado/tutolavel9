<h1>Form Validation page</h1>

<form action="formavalid" method="post">
    @csrf

    @if($errors->any())
        @foreach ($errors -> all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
    <input type="text" name="username" placeholder="Enter your username"><br><br>
    <input type="text" name="name" placeholder="Enter your name"><br><br>
    <input type="email" name="email" placeholder="Enter your email"><br><br>
    <button type="submit">Submit</button><br>
</form>