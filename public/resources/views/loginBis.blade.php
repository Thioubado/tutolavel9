<h1>Login Page</h1>
<form action="submitbis" method="POST">
    @csrf
    <input type="text" name="nom" placeholder="Tapez votre nom"><br>
    <input type="text" name="prenom" placeholder="Tapez votre prenom"><br>
    <input type="email" name="email" placeholder="Tapez votre adresse mail"><br>
    <button type="submit">Soumettre</button>
</form>