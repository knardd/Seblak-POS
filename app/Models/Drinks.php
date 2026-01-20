<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drinks extends Model
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

}
