@extends('layout.payment')
@section('title','Year Member Payment')

@section('content_harga')
<div class="card text-bg-light mb-3 mt-5" style="max-width: 300rem; margin:100px 300px 0 200px;">
    <div class="card-header">
        <h4>INVOICE</h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th colspan="2">item</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th colspan="1">1</th>
                <td>Year Member plan (365/day)</td>
                <td></td>
                <td>RP6.400.000</td>                       
                </tr>
                <tr>
                <th colspan="1">2</th>
                <td>PPN (+12%)</td>
                <td></td>
                <td>RP.768.000</td>
                </tr>
                <tr>
                <th colspan="2"></th>
                <td>TOTAL: </td>
                <td>RP7.162.000</td>
                </tr>
            </tbody>
        </table>
        <div class="benefit">
        <h5>Apa yang kamu dapat?</h5>
        <ol>
            <li>Program latihan sesuai target kamu</li>
            <li>program nutrisi/kesehatan</li>
            <li>Motivator</li>
            <li>Cetering makanan sesuai kebutuhan</li>
            <li>Layanan konsultasi dengan dokter ahli giz</li>
            <li>Merchandise(T-shirt,Hat,Totebag,Tumbler)</li>
        </ol>
        </div>
        <div class="catatan">
        <h5>catatan</h5>
        <ol>
            <li>Kode pembayaran berlaku sampai 24 jam</li>
            <li>Anda akan menerima email jika pembayaran berhasil</li>
            <li>Tersedia berbagai metode pembayaran</li>
            <li>Harap memahami plan yang anda ambil</li>
        </ol>
        </div>
</div>
@endsection
@section('content_biodata')
<div class="card text-bg-light mb-3 mt-5" style="max-width: 300rem; margin:100px 300px 0 200px;">
    <div class="card-header">
        <h4 class="text-center">Detail costomer</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('payment.create') }}" method="POST"  id="payment-form">
             <input type="hidden" name="price" value="7162000">
             @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama lengkap</label>
                <input type="tetx" class="form-control" id="name" aria-describedby="name" name="nama" autocomplete="off" required/>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                <input type="tetx" class="form-control" id="alamat" aria-describedby="name" name="alamat" autocomplete="off" required />
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" aria-describedby="email"  name="email" autocomplete="off" required />
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Bukti pembayaran (konfirmasi pembayaran)</label>
                <input class="form-control" type="file" id="formFileMultiple" name="payment_confirmation" multiple>
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Tempat tanggal lahir</label>
                <input type="tetx" class="form-control" id="birthday" aria-describedby="name" name="birthday" autocomplete="off" required />
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">No.telp</label>
                <input type="tel" class="form-control" id="tel" aria-describedby="tel" maxlength="12" name="Tel" autocomplete="off" required/>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">kota</label>
                <input type="text" class="form-control" id="text" aria-describedby="text" name="city" autocomplete="off" required />
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="motivation"></textarea>
                <label for="floatingTextarea2">Apa motifasi mu??</label>
            </div>
                <button type="submit" class="btn btn-success btn-sm mt-5" style="width: 200px; height: 50px; margin-left: 20px" data-price="7162000" id="pay-button"><b>Checkout</b></button>
        </form>
</div>
@endsection