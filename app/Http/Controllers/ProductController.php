<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transactions;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ingredients()
    {
        $products = Product::where('category', 'ingredient')->get();
        $transaction = Transactions::active();
        return view('ingredients', compact('products', 'transaction'));
    }

    public function drinks()
    {
        $products = Product::where('category', 'drink')->get();
        $transaction = Transactions::active();
        return view('drinks', compact('products', 'transaction'));
    }
}
