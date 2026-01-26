<div>
        <div class="w-64 bg-white border-l border-gray-200 shadow-lg p-4 flex flex-col h-screen rounded-lg m-4">
        <h3 class="font-semibold text-gray-800 mb-4">Order Summary</h3>
        
        @if(isset($transaction) && $transaction?->items?->count())
            <div class="flex-1 overflow-y-auto space-y-3">
                <table class="w-full text-sm">
    <tbody>
        @foreach ($transaction->items as $item)
            <tr class="border-b border-gray-100">
                <!-- Nama produk -->
                <td class="py-2 text-gray-700 truncate">
                    {{ $item->product->name }}
                </td>

                <!-- Quantity -->
                <td class="py-2 text-center text-gray-600 w-12">
                    x{{ $item->quantity }}
                </td>

                <!-- Subtotal -->
                <td class="py-2 text-right font-medium text-gray-900">
                    Rp {{ number_format($item->subtotal, 0, ',', '.') }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
            </div>

            <div class="mt-4 pt-4 border-t border-gray-200 flex flex-col">
                <p class="text-lg font-bold text-gray-900">
                    Total: Rp {{ number_format($transaction->items->sum('subtotal'), 0, ',', '.') }}
                </p>
                <button wire:click="$dispatch('open-payment-modal', {total: {{ $transaction->items->sum('subtotal') }}})" class="w-full mt-4 px-4 py-2 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                    Bayar
                </button>
            </div>
        @else
            <div class="flex-1 flex items-center justify-center text-gray-500 text-sm">
                <p>Belum ada Transaksi</p>
            </div>
        @endif
    </div>
</div>
