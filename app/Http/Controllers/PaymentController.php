<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function __construct()
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    // Menampilkan halaman pembayaran
    public function create()
    {
        return view('payments.create');
    }

    // Menyimpan transaksi pembayaran
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1000',
            'booking_id' => 'required|exists:bookings,id',
        ]);

        $orderId = 'ORDER-' . time(); // Membuat order_id unik

        // Data pembayaran yang dikirim ke Midtrans
        $paymentData = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $request->amount,
            ],
            'customer_details' => [
                'first_name' => auth()->name ?? 'Guest',
                'email' => auth()->email ?? 'guest@example.com',
            ],
        ];

        // Membuat Snap Token
        $snapToken = Snap::getSnapToken($paymentData);

        // Simpan transaksi ke database
        Payment::create([
            'order_id' => $orderId,
            'amount' => $request->amount,
            'booking_id' => $request->booking_id,
            'status' => 'pending',
            'snap_token' => $snapToken,
        ]);

        return view('payments.payment', compact('snapToken'));
    }

    // Callback dari Midtrans
    public function callback(Request $request)
    {
        $serverKey = config('services.midtrans.server_key');
        $signatureKey = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($signatureKey == $request->signature_key) {
            $payment = Payment::where('order_id', $request->order_id)->first();

            if ($request->transaction_status == 'settlement') {
                $payment->update(['status' => 'completed']);
            } elseif ($request->transaction_status == 'pending') {
                $payment->update(['status' => 'pending']);
            } elseif ($request->transaction_status == 'cancel' || $request->transaction_status == 'deny') {
                $payment->update(['status' => 'failed']);
            }
        }

        return response()->json(['status' => 'ok']);
    }
}
