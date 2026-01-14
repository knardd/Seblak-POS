<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    protected $fillable = [
        'name',
        'price',
        'image',
    ];

    public function transactionItems()
    {
        return $this->hasMany(TransactionItems::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
