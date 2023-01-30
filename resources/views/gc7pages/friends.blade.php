@extends ('gc7layouts.prod')

@section('title')
    Friends
@endsection

@section('main')
    <h1 style="margin-left: 3%">Friends Page</h1>
    <h3 style="text-align: right; font-style: italic; font-weight: normal; margin-right: 3%">Just for test</h3>

    <table>

        <thead>
            <tr>
                <th style="width: 100px;">User</th>
                <th>QrCode</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $k => $friend)
                <tr class="gc7spaced">
                    <td class="userBlock" style="width: 150px;  margin-left:7%">
                        <img src="assets/img/{{ $friend->picture }}" class="ui mini rounded image gc7friendimg" title="Picture of {{ $friend->name }}" alt="Picture of {{ $friend->name }}">
                        <div>{{ $friend->username }}<br>{{ $friend->name }} </div>
                        </div>
                    </td>
                    <td style="width: 60%; padding-left: 20px; font-weight: bold">
                        <button class="qrbtn" title="Le QrCode de {{ $friend->username }}"> <i class="qrcode icon"></i> See his QrCode</button>
                        {{-- @php
                           $qrcode = strtolower($friend->username);
                           echo "<img src='assets/img/qr_{$qrcode}.png' class='ui mini image' alt='Qrcode&nbsp;de&nbsp;{$friend->username}'>";
                        @endphp --}}
                    </td>
                </tr>

            <div class="ui modal" id="modal{{ $k }}">
                <i class="close icon"></i>
                <div class="header">
                  QrCode of {{ $friend->name }} ({{ $friend->username }})
                </div>
                <div class="image content modalimg">
                  <div class="ui medium image">
                    <img src="assets/img/{{ $friend->picture }}">
                  </div>

                </div>
                <div class="actions">
                  <div class="ui positive right labeled icon button">
                    Yep, that's good !
                    <i class="checkmark icon"></i>
                  </div>
                </div>
              </div>

              @endforeach
        </tbody>
    </table>
@endsection
