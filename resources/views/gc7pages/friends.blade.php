@extends ('gc7layouts.main')

@section('title')
    Friends
@endsection

@section('main')
    <h1>Friends Page</h1>
    <h3>Just for test</h3>

    <table>

        <thead>
            <tr>
                <th>User</th>
                <th>Photo</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $friend)
                <tr>
                    <td class="userBlock">
                        <img src="assets/img/{{ $friend->picture }}" class="ui mini rounded image">
                        <div>{{ $friend->username }}<br>{{ $friend->name }} </div>
                        </div>
                    </td>
                    <td>
                        {{ $friend->picture }}
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
