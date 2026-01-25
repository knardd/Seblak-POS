<div>
        @foreach ($products as $product)
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-200 hover:shadow-md">
        <div class="flex justify-center items-center h-40 bg-gray-50">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-32 h-32 object-cover rounded-lg">
        </div>
        <div class="p-4">
            <h2 class="font-semibold text-gray-800 truncate">{{ $product->name }}</h2>
            <p class="text-lg font-bold text-gray-900 mt-2">Rp {{ number_format($product->price, 0, ',', '.') }}</p>

            <div class="flex items-center justify-between mt-4">
                    <button wire:click="decrease({{ $product->id }})" class="w-8 h-8 flex items-center justify-center rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50">
                        &minus;
                    </button>

                <span class="text-gray-800 font-medium min-w-[24px] text-center">{{ optional($transaction->items->where('product_id', $product->id)->first())->quantity ?? 0 }}</span>

                    <button wire:click="add({{ $product->id }})" class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-600 text-white hover:bg-blue-700 transition-colors duration-150 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                        +
                    </button>
            </div>
        </div>
    </div>
    @endforeach
</div>