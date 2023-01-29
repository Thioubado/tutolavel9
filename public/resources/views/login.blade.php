<h1>Login Form</h1>

<form action="submit" method="POST">
    
    @csrf
    <input type="text" name="username" placeholder="Enter your Username"/><br><br>
    <input type="text" name="name" placeholder="Enter your Name"/><br><br>
    <input type="email" name="email" placeholder="Enter your Emaiil"><br><br>
    <button type="submit">Submit</button>

</form>
