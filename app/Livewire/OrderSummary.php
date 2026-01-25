<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Transactions;

class OrderSummary extends Component
{
    public $transactionId;
    protected $listeners = ['cartUpdated' => '$refresh'];

    public function mount()
    {
        $this->transactionId = session('transaction_id');
    }

    public function refreshData()
    {
        // cuma trigger render ulang
    }
    public function render()
    {
        return view('livewire.order-summary' , [
            'transaction' => Transactions::with('items.product')->find(session('transaction_id')),
        ]);
    }
}
