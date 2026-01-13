<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction_Items extends Model
{
    protected $fillable = ['transaction_id', 'ingredent_id', 'quantity', 'price', 'total_price'];
}
