<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Scan QR Code untuk menghubungkan WhatsApp</h1>
        <div id="qr-code">
            <p>Menunggu QR Code...</p>
        </div>
    </div>

    <script>
        const fetchQRCode = async () => {
            const response = await axios.get('/api/qrcode');
            document.getElementById('qr-code').innerHTML = `<img src="${response.data.qr}" alt="QR Code" />`;
        };

        fetchQRCode();
    </script>
</body>

</html>
