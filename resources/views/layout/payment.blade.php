<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <style>
    body{
        background-color: black;
    }
    .metode-pembayaran li{
      padding: 5px;
    }
    </style>
</head>
<body>
    {{-- main konten --}}
    <section class="bg-black text-white">
        @yield('content_harga')
    </section>
    <section id="biodata">
        @yield('content_biodata')
    </section>
    
</body>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
<script>
document.getElementById('pay-button').onclick = function(event) {
    event.preventDefault();
    
    // Ambil harga dari data-price di tombol
    let price = this.getAttribute('data-price');
    
    if (!price) {
        alert('Harga tidak ditemukan!');
        return;
    }

   fetch('/payment/create', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
    },
    body: JSON.stringify({
        price: price,  // Harga yang dipilih
        plan: 'MONTH',  // Paket yang dipilih
        name: document.querySelector('input[name="nama"]').value,
        email: document.querySelector('input[name="email"]').value,
        phone: document.querySelector('input[name="Tel"]').value
    }),
})
.then(response => response.json())
.then(data => {
    console.log(data);  // Debug: lihat response
    if (data.snap_token) {
        snap.pay(data.snap_token, {
            onSuccess: function(result) {
                alert('Pembayaran Berhasil');
                console.log(result);
            },
            onPending: function(result) {
                alert('Pembayaran Pending');
                console.log(result);
            },
            onError: function(result) {
                alert('Pembayaran Gagal');
                console.log(result);
            }
        });
    } else {
        alert("Tidak ada Snap Token yang diterima.");
    }
})
.catch(error => {
    console.error('Error:', error);
    alert("Ada kesalahan saat menghubungi server.");
});

};

</script>
</html>