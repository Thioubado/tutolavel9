<h1>UPDATE DATA</h1>
    <table>
        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Email</td>
            <td>Adresse</td>
            <td>Operations</td>
        </tr>

        @foreach($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['nom']}}</td>
            <td>{{$user['prenom']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['adresse']}}</td>
            <td>
                <a href={{"delete/".$user['id']}}>Delete</a>
                <a href={{"editpage/".$user['id']}}>Editer</a>
            </td>

        </tr>
        @endforeach

    </table>