<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @php
        use SimpleSoftwareIO\QrCode\Facades\QrCode;
    @endphp
</head>
<body>
    <div class="container p-8">
        <div class="wrapper border border-black border-solid h-lvh p-8 flex justify-around content-between">
            <div class="content border border-black border-solid w-2/4 p-8">
                <form id="qr-form" action="/landing-two" @submit.prevent="submit">
                    <div class="mini-container pb-1.5">
                        <label for="name" class="text-2xl ">NAME: <br>
                            <input type="text" name="name" id="name" placeholder="Enter your name here">
                        </label>
                    </div>
                    <div class="mini-container pb-1.5">
                        <label for="designation" class="text-2xl">Designation: <br>
                            <input type="text" name="designation" id="designation" placeholder="Enter your designation here">
                        </label>
                    </div>
                    <div class="mini-container pb-1.5">
                        <label for="serial_number" class="text-2xl">Serial Number: <br>
                            <input type="number" name="serial_number" id="serial_number" placeholder="Enter your serial number here">
                        </label>
                    </div>
                    <div class="submit">
                        <button type="submit" class="bg-blue-200 py-4 px-6">Submit</button>
                    </div>
                </form>
            </div>
            <div class="output border border-black border-solid w-2/4 p-4">
                <div class="qrcode">
                    {!! QrCode::size(230)->encoding('UTF-8')->generate('Name: ') !!}
                </div>
                <div class="details">
                    <div class="name">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        document.getElementById('qr-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            // Get input values
            let name = document.getElementById('name').value;
            let designation = document.getElementById('designation').value;
            let serialNumber = document.getElementById('serial_number').value;

            // Combine inputs into a string
            let qrContent = `Name: ${name}\nDesignation: ${designation}\nSerial Number: ${serialNumber}`;

            // Generate QR code
            let qrCodeHtml = `{!! QrCode::size(230)->encoding('UTF-8')->generate('${qrContent}') !!}`;
            document.getElementById('qrcodeContainer').innerHTML = qrCodeHtml;
        });
    </script> --}}
</body>
</html>