@extends('Pengguna.index')
@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <div class="bg-gray-100 rounded-lg shadow-lg p-4">
                    <div class="flex justify-center" id="qr-code">
                        <p>Menunggu QR Code...</p>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg shadow-lg p-4">
                    <h3 class="text-lg font-medium">Akun Saya</h3>
                    <hr class="my-3" />
                    <div>
                        <h4>Username <span class="ml-2">:</span> {{ Auth::user()->name }}</h4>
                        <h4>Email <span class="ml-2">:</span> {{ Auth::user()->email }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const fetchQRCode = async () => {
            const response = await axios.get('/api/qrcode');
            document.getElementById('qr-code').innerHTML = `<img src="${response.data.qr}" alt="QR Code" />`;
        };

        fetchQRCode();
    </script>
@endsection

/node_modules
./wwebjs_auth\session
