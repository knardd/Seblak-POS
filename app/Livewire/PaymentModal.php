<?php

namespace App\Livewire;

use App\Models\Transactions;
use Livewire\Component;

class PaymentModal extends Component
{
    public $showModal = false;
    public $totalPrice = 0;
    public $paidAmount = 0;

    public function openModal($total)
    {
        $this->totalPrice = $total;
        $this->paidAmount = 0;
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function confirmPayment()
    {
        // validasi sederhana
        if ($this->paidAmount < $this->totalPrice) {
            $this->addError('paidAmount', 'Uang tidak cukup');
            return;
        }

        // simpan total price saja
        Transactions::create([
            'total_price' => $this->totalPrice,
        ]);

        $this->showModal = false;

        // optional: reset / emit event
        $this->dispatch('paymentSuccess');
    }

    public function render()
    {
        return view('livewire.payment-modal');
    }
}
