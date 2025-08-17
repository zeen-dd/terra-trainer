@extends('layout.sidebar')
@section('title', 'Dashboard Admin')

@section('content')
    <div>
        <h1>Selamat Datang Admin</h1>
        <hr class=" border-primary border-5 opacity-75">
        <h1 class="text-center">Data Trapezius</h1>
    <div class="row">
    <div class="col-sm-4 mb-3 mb-sm-0 p-5 mt-3">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">jumlah client Week</h5>
            <h1>angka</h1>
            <a href="admin.php" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 p-5 mt-3">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">jumlah client Month</h5>
            <h1>angka</h1>
            <a href="adminb.php" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mb-3 mb-sm-0 p-5 mt-3">
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">jumlah client Year</h5>
            <h1>angka</h1>
            <a href="adminc.php" class="btn btn-primary">Detail</a>
        </div>
    </div>
      </div>
    <div class="col-sm-4 p-5 mt-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">jumlah client Year-Member</h5>
                <h1>angka</h1>
                <a href="admind.php" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mb-3 mb-sm-0 p-5 mt-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">jumlah Membership(GYM)</h5>
                <h1>angka</h1>
                <a href="adminmember.php" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 p-5 mt-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">jumlah contact yang masuk</h5>
                <h1>angka</h1>
                <a href="admincontak.php" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    </div>
    <hr class=" border-primary border-5 opacity-75">
    
        </div>
    </div>
@endsection