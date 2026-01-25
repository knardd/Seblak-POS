<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Transactions extends Model
{
    protected $fillable = ['user_id', 'total_price', 'status'];

    public static function active()
    {
        // kalau session belum punya transaksi
        if (!Session::has('transaction_id')) {
            $transaction = self::create([
                'status' => 'active',
                'total_price' => 0,
            ]);

            Session::put('transaction_id', $transaction->id);
            return $transaction;
        }

        // ambil transaksi dari session
        return self::with('items.product')
        ->find(Session::get('transaction_id'));
    }

    public function items()
    {
        return $this->hasMany(TransactionItems::class, 'transaction_id');
    }
    
}
