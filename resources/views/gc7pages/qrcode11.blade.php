@extends ('gc7layouts.main')

@section('title')
    QrCode11
@endsection

@section('main')
    <h1>QrCode11 Page</h1>
    <p>First Scanner (HTML -JS</p>

    <div id="scanner">
        <input type="file" id="qr-input-file" accept="image/*" capture="environment">
        <br>
        Result
        <div id="qr-data" style="width: 600px"></div>

        <div id="reader"></div>
        <!--
            <div id="reader-top-container" style="position: relative;">
                <div id="reader-container">
                </div>
            </div>
            <div class="empty"></div>
            -->
    </div>
    <p>Data:<br>
        @php
            use App\Http\Tools\Gc7;
            Gc7::aff($data);

            // foreach ($data as $k => $v) {
            //     echo $k . ' ' . $v . '<br>';
            // }
        @endphp
    </p>

    <script>
        const html5QrCode = new Html5Qrcode( /* element id */ "reader");
        // File based scanning
        const fileinput = document.getElementById('qr-input-file');
        const qrdata = document.getElementById('qr-data');
        fileinput.addEventListener('change', e => {
            if (e.target.files.length == 0) {
                // No file selected, ignore
                return;
            }
            const imageFile = e.target.files[0];
            // Scan QR Code
            html5QrCode.scanFile(imageFile, true)
                .then(decodedText => {
                    // success, use decodedText
                    qrdata.innerHTML = decodedText
                    console.log(decodedText);

                    window.open(decodedText, "_self")
                })
                .catch(err => {
                    // failure, handle it.
                    console.log(`Error scanning file. Reason: ${err}`)
                });
        });
    </script>
@endsection
