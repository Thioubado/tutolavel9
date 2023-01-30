@extends ('layouts.main')

@section('title')
    Show list
@endsection

@section('main')
    <h1>Show list Page</h1>
    
    <style>
        table {
            margin-top: 20px!important;
            border-collapse: collapse;
        }
        
        th,
        td {
            border: 2px solid rgb(179, 179, 179);
            padding: 5px 7px;
        }
        span {
            text-align: center;
        }
    </style>
    
    <table>
        <tr>
            <td>Id</td>
            <td><strong>Pseudo</strong></td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Adresse</td>
        </tr>
        @foreach($membres as $membre)

        <tr>
            <td style="text-align:right">{{$membre['id']}}</td>
            <td><strong>{{$membre['pseudo']}}</strong></td>
            <td>{{$membre['nom']}}</td>
            <td>{{$membre['prenom']}}</td>
            <td><i class="{{$membre['pays']}} flag"></i> {{$membre['adresse']}}</td>
        </tr>

        @endforeach
    </table>

@endsection
