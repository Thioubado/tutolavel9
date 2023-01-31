@extends ('gc7layouts.main')

@section('title')
    Ajout Membre
@endsection

@section('main')
    <h1>Ajouter membre</h1>

    <form action="save" method="POST">
        @csrf
        <input type="text" name="nom" placeholder="Entrez your votre nome"><br><br>
        <input type="text" name="prenom" placeholder="Entrez votre prénom"><br><br>
        <input type="text" name="email" placeholder="Entrez votre meilleur email"><br><br>
        <textarea name="adresse" placeholder="Entrez votre addresse"></textarea><br><br>
        <button type="submit">Ajouter membre</button><br><br>
    </form>
@endsection
