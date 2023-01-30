@extends ('gc7layouts.main')

@section('title')
    Friend
@endsection

@section('main')
    <h1 style="margin-left: 3%">Friend Page</h1>
    <div class="ui link cards" style="margin-left: 1%; margin-top:10px">
        <div class="card">
            <div class="image">
                <img src="./../../../assets/img/{{ $friend->picture }}" class="ui mini rounded image gc7friendimg withoutborder" title="Picture of {{ $friend->name }}" alt="Picture of {{ $friend->name }}">
            </div>
            <div class="content">
                <div class="header">{{ $friend->username }}<br> 
                @php
                    echo $friend->name.' '.$friend->lastname[0].'.';
                @endphp
                </div>
                <div class="meta">
                    <div class="email">{{ $friend->email }}</div>
                </div>
            </div>
            <div class="extra content">
                <span class="right floated">Last update: {{ $friend->updated_at }} </span>
                <span><i class="{{ $friend->country }} flag"></i>
                @php
                    echo ucfirst($friend->location);
                @endphp
                </span>
            </div>
        </div>
    </div>
@endsection
