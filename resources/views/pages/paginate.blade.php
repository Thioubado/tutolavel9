@extends ('layouts.main')

@section('title')
    Paginate
@endsection

@section('main')
    <h1>Paginate Page</h1>

    <table border='1'>
        <tr>
            <td>id</td>
            <td>nom</td>
            <td>prenom</td>
            <td>adresse</td>
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

    <span>
        {{$members->Links()}}
    </span>
    <style>
        .w-5{
            display : none
        }
    </style>
@endsection
