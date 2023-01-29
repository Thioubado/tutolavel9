@extends ('gc7layouts.prod')

@section('title')
    QrCode
@endsection

@section('main')
    <h1>QrCode Page</h1>
    Reader
    <div id="scanner">

        <input type="file" id="qr-input-file" accept="image/*" capture="environment">

        <div id="reader-top-container" style="position: relative;">
            <div id="reader-container">
                <div id="reader"></div>
            </div>
        </div>
        <div class="empty"></div>
    </div>
    <p>Data: {{ $data }}</p>
    Result
    <div id="qr-data" style="width: 600px"></div>
    <script src="./resources/js/html5-qrcode.min.v2.3.4.js"></script>
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
                })
                .catch(err => {
                    // failure, handle it.
                    console.log(`Error scanning file. Reason: ${err}`)
                });
        });
    </script>
@endsection
