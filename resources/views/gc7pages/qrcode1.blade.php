@extends ('gc7layouts.main')

@section('title')
    QrCode
@endsection

@section('main')
    <h1>QrCode Page</h1>

    <p>Reader based on a HTML 5 librairy (html5-qrcode.min.v2.3.4.js)</p>
    <p>→ Work slowly, and only on hight quality QrCodes - And only one by one</p>

    <p>Example of a such result with </p>

    <hr>
<br>
    <div id="scanner">

        <input type="file" id="qr-input-file" accept="image/*" capture="environment">
        <br>
        Result
        <div id="qr-data" style="width: 600px"></div>

        <div id="reader"></div>

    </div>
    <p>Data: {{ $data }}</p>
    <script src="./../assets/js/html5-qrcode.min.v2.3.4.js"></script>
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

                    window.open(decodedText,"_self")

                })
                .catch(err => {
                    // failure, handle it.
                    console.log(`Error scanning file. Reason: ${err}`)
                });
        });
    </script>
@endsection
