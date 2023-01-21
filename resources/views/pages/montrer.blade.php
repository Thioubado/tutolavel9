<h1>Delete data from DB</h1>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Prenom</td>
        <td>Adresse</td>
        <td>Operqtion</td>
    </tr>
    @foreach($members as $member)
    <tr>
            <td>{{$member['id']}}</td>
            <td>{{$member['name']}}</td>
            <td>{{$member['prenom']}}</td>
            <td>{{$member['adresse']}}</td>
            <td><a href={{"delete/".$member['id']}}>Delete</a></td>
        </tr>
    @endforeach
    </table>