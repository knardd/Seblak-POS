<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Transactions;
use App\Models\TransactionItems;

class Pos extends Component
{
    public $category;

    public function add($productId)
    {
        $product = Product::findOrFail($productId);
        $transaction = Transactions::active();

        $item = TransactionItems::where('transaction_id', $transaction->id)
            ->where('product_id', $product->id)
            ->first();

        if ($item) {
            $item->increment('quantity');
            $item->increment('subtotal', $product->price);
        } else {
            TransactionItems::create([
                'transaction_id' => $transaction->id,
                'product_id'     => $product->id,
                'quantity'       => 1,
                'price'          => $product->price,
                'subtotal'       => $product->price,
            ]);
        }

        $this->dispatch('cartUpdated');
    }

    public function decrease($productId)
    {
        $product = Product::select('id', 'price')->findOrFail($productId);
        $transaction = Transactions::active();

        $item = TransactionItems::where('transaction_id', $transaction->id)
            ->where('product_id', $product->id)
            ->first();

        if ($item) {
            if ($item->quantity > 1) {
                $item->decrement('quantity');
                $item->decrement('subtotal', $item->price);
            } else {
                $item->delete();
            }
        }
        $this->dispatch('cartUpdated');
    }

    public function render()
    {
        return view('livewire.pos', [
            'products'    => Product::where('category', $this->category)->get(),
            'transaction' => Transactions::active()->load('items.product'),
        ]);
    }
}