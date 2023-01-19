<h1>Add member</h1>

<form action="save" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Enter your name"><br><br>
    <input type="text" name="prenom" placeholder="Enter your prenom"><br><br>
    <input type="text" name="email" placeholder="Enter your email"><br><br>
    <input type="text" name="adresse" placeholder="Enter your address"><br><br>
    <button type="submit">Add Member</button>
</form>