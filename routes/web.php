<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

//memulai otomatis dari index
Route::get('/', function () {
    return view('index');
});
//dashboard admin
Route::get('/dashboard', function () {
    return view('dashboard');
});

// halaman pembayaran weekly
Route::get('/payment/weekly',[PaymentController::class, 'showWeeklyForm'])->name('payment.weekly');
// halaman pembayaran montly
Route::get('/payment/monthly',[PaymentController::class, 'showMonthlyForm'])->name('payment.monthly');
// halaman pembayaran year
Route::get('/payment/yearly',[PaymentController::class, 'showYearlyForm'])->name('payment.yearly');
// halaman pembayaran year-member
Route::get('/payment/year_member',[PaymentController::class, 'showYearMemberForm'])->name('payment.year_member');

//halaman form pembayaran
// Route::get('/payment', function(){
//     return view('payment');
// });
//buat orderan
Route::post('/payment/create', [PaymentController::class, 'createPayment'])->name('payment.create');    
// Route untuk menangani notifikasi pembayaran
Route::post('/payment-notification', [PaymentController::class, 'paymentNotification']);





