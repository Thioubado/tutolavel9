@extends ('gc7layouts.main')
@section('title')
    Test
@endsection

@section('main')
    <h1>Test Page</h1>
    <style>
        .two-block {
            /* border: 1px solid red; */
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .case {
            align-items: center;
            /* border: 1px solid blue; */
            /* margin: 0 10px; */
        }
    </style>

<p>Liste des Ids des '<strong>Membre</strong>': {{ $data[2] }}</p>
<hr>

    <div style="text-align: center">
        <div class="two-block">
            Façon 1
            <div class="case" style="width:40%">
                @php
                    use App\Http\Tools\Gc7;
                    Gc7::aff($data[0][0]);
                @endphp
            </div>
            <div class="case" style="font-size:300%; font-weight: bold;">
                →
            </div>
            <div class="case" style="width:40%">
                @php
                    Gc7::aff($data[0][1]);
                @endphp
            </div>
        </div>
    </div>
    <hr>
    <div style="text-align: center">
        <div class="two-block">
            Façon 2
            <div class="case" style="width:40%">
                @php
                    Gc7::aff($data[1][0]);
                @endphp
            </div>
            <div class="case" style="font-size:300%; font-weight: bold;">
                →
            </div>
            <div class="case" style="width:40%">
                @php
                    Gc7::aff($data[1][1]);
                @endphp
            </div>
        </div>
    </div>
@endsection
