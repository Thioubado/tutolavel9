<h1>La page d'edition de personne choisie</h1>
<form action="edit" method="POST">
    @csrf

    <input type="hidden" name="id" id="" value ="{{$users['id']}}">
    <input type="text" name = "nom" value = "{{$users['nom']}}"><br><br><!--Ce $users la cle du users affecte au $data dans le controller-->
    <input type="text" name = "prenom" value = "{{$users['prenom']}}"><br><br>
    <input type="text" name = "email" value = "{{$users['email']}}"><br><br>
    <input type="text" name = "adresse" value = "{{$users['adresse']}}"><br><br>
    <button type="submit">Editer</button>
</form>

