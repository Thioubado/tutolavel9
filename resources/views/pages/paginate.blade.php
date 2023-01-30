@extends ('layouts.main')

@section('title')
    Paginate
@endsection

@section('main')
    <h1>Paginate Page</h1>
    <style>
        table {
            margin-top: 20px!important;
            border-collapse: collapse;
        }
        
        th,
        td {
            border: 2px solid grey;
            padding: 5px 10px;
        }
        span {
            text-align: center;
        }
    </style>
    
    <table>
        <tr>
            <td>Id</td>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Adresse</td>
        </tr>

        @foreach ($members as $member)
            <tr>
                <td style="text-align:right">{{ $member['id'] }}</td>
                <td>{{ $member['nom'] }}</td>
                <td>{{ $member['prenom'] }}</td>
                <td>{{ $member['adresse'] }}</td>
            </tr>
        @endforeach
    </table>

    <span>
        {{ $members->Links() }}
    </span>
    <style>
        .w-5 {
            display: none
        }
    </style>
@endsection
