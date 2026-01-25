<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'image',
        'category',
    ];

    public function transactionItems()
    {
        return $this->hasMany(TransactionItems::class);
    }
}
