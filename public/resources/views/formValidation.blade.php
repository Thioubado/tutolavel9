<h1>Form Validation page</h1>

<form action="formavalid" method="post">
    @csrf
    <span>@error('username'){{$message}}@enderror</span><br>
    <input type="text" name="username" placeholder="Enter your username"><br><br>
    <span>@error('name'){{$message}}@enderror</span><br>
    <input type="text" name="name" placeholder="Enter your name"><br><br>
    <span>@error('email'){{$message}}@enderror</span><br>
    <input type="email" name="email" placeholder="Enter your email"><br><br>
    <button type="submit">Submit</button><br>
</form>