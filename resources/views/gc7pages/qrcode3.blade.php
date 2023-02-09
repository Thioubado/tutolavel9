@extends ('gc7layouts.main')

@section('title')
    QrCode2
@endsection

@section('main')
    <h1>QrCode2 Page 2</h1>
    <p>Second Codes Scanner</p>
    {{-- <p>https://packagist.org/packages/chillerlan/php-qrcode</p> --}}

    {{-- //2see https://github.com/chillerlan/js-qrcode --}}

    {{-- {{ $data }} --}}

    @php
        echo $data;
    @endphp

<script type="module">
	import {QRCode} from './dist/js-qrcode-es6-src.js';

	// an SVG image as base64 data URI will be returned by default
	let qrcode = (new QRCode()).render('https://www.youtube.com/watch?v=dQw4w9WgXcQ');

	// append it to the DOM
	let img = document.createElement('img');
	img.alt = 'QRCode';
	img.src = qrcode

	document.getElementById('qrcode-container').appendChild(img);
</script>
@endsection
