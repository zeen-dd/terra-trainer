<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentConfirmation;
use Illuminate\Http\Request;
use Midtrans\snap;
use Midtrans\Config;

class PaymentController extends Controller
{
    // pembayaran weekly
    public function showWeeklyForm(){
        return view('payment.weekly');
    }
    //pembayaran monthly
    public function showMonthlyForm(){
        return view('payment.monthly');
    }
    //pembayaran year
    public function showYearlyForm(){
        return view('payment.yearly');
    }
    //pembayaran year-membaer
    public function showYearMemberForm(){
        return view('payment.year_member');
    }


   public function createPayment(Request $request) {
        // Mendapatkan harga dari form yang dikirimkan
        $price = $request->input('price');  // Harga paket yang dipilih

        // Validasi harga
        if (!$price || !is_numeric($price)) {
            return response()->json(['error' => 'Harga tidak valid.'], 400);
        }

        // Konfigurasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Detail transaksi
        $transactionDetails = [
            'order_id' => uniqid(), // Membuat nomor order unik
            'gross_amount' => $price, // Total pembayaran yang akan dibayar
        ];

        // Detail item
        $itemDetails = [
            [
                'id' => 'item1',
                'price' => $price,
                'quantity' => 1,
                'name' => 'Paket Langganan'
            ]
        ];

        // Detail customer
        $customerDetails = [
            'first_name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        // Menyiapkan transaksi
        $transaction = [
            'payment_type' => 'bank_transfer', // Pembayaran melalui bank transfer
            'transaction_details' => $transactionDetails,
            'item_details' => $itemDetails,
            'customer_details' => $customerDetails
        ];

        try {
            // Mengambil Snap Token dari Midtrans
            $snapToken = Snap::getSnapToken($transaction);

            // Log untuk debugging (untuk melihat Snap Token)
            Log::info('Snap Token diterima: ' . $snapToken);

            // Mengembalikan Snap Token sebagai JSON response
            return response()->json(['snap_token' => $snapToken]);

        } catch (\Exception $e) {
            // Menangani error dan mencatatnya di log
            Log::error('Error: ' . $e->getMessage());

            // Mengirimkan respons error ke frontend
            return response()->json(['error' => 'Terjadi kesalahan saat menghubungi Midtrans API.'], 500);
        }
    }
    public function paymentNotification(Request $request)
{
    $notif = $request->getContent();
    
    // Mendapatkan order_id dari notifikasi
    $order_id = $request->order_id;

    try {
        // Verifikasi status transaksi di Midtrans
        $status = \Midtrans\Transaction::status($order_id);

        // Cek jika status bukan objek yang valid
        if (!is_object($status)) {
            return response()->json(['error' => 'Invalid status object']);
        }

    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()]);
    }

    // Cek status pembayaran
    if (isset($status->transaction_status)) {
        if ($status->transaction_status == 'capture') {
            // Pembayaran berhasil (capture)
            $orderDetails = [
                'package' => 'Paket Langganan Weekly',
                'amount' => 280000,
                'start_date' => now()->toDateString(),
            ];

            // Kirim email konfirmasi
            Mail::to($request->email)->send(new PaymentConfirmation($orderDetails));

            // Update status pembayaran di database (misalnya)
            // Order::where('order_id', $order_id)->update(['status' => 'paid']);

            return response()->json(['message' => 'Email Konfirmasi telah dikirim']);
        } elseif ($status->transaction_status == 'pending') {
            // Pembayaran pending
            return response()->json(['message' => 'Pembayaran dalam proses, tunggu konfirmasi']);
        } else {
            // Pembayaran gagal atau status lain
            return response()->json(['message' => 'Pembayaran gagal atau dibatalkan']);
        }
    } else {
        return response()->json(['error' => 'Transaction status is missing']);
    }
}

}

