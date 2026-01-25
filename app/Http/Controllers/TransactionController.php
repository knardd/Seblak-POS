<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function checkout()
    {
        $transaction = Transactions::active();

        // tandai transaksi selesai
        $transaction->update([
            'status' => 'paid',
        ]);

        // hapus session transaksi
        Session::forget('transaction_id');

        return redirect()->route('pos.index')
            ->with('success', 'Transaksi berhasil dibayar');
    }
}
