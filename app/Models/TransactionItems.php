<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItems extends Model
{
    protected $fillable = ['transaction_id', 'ingredient_id', 'quantity', 'price'];

    public function transaction()
    {
        return $this->belongsTo(Transactions::class);
    }

    public function ingredient()
    {
        return $this->belongsTo(Ingredients::class);
    }
}
