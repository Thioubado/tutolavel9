@extends ('layouts.main')

@section('title')
    Show list
@endsection

@section('main')
    <h1>Show list Page</h1>

    
    <table border='1'>
        <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Adresse</td>
        </tr>
        @foreach($members as $member)

        <tr>
            <td>{{$member['id']}}</td>
            <td>{{$member['name']}}</td>
            <td>{{$member['prenom']}}</td>
            <td>{{$member['adresse']}}</td>
        </tr>

        @endforeach
    </table>

@endsection
