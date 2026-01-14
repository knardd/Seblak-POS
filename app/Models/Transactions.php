<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $fillable = ['user_id', 'total_price'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transactionItems()
    {
        return $this->hasMany(TransactionItems::class);
    }
    
}
