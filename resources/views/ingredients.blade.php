@extends('layouts.app')

@section('content')
<div class="p-6">
<h1 class="text-2xl font-bold text-gray-800 mb-6">Ingredients</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
<livewire:pos category="ingredient" />
</div>
</div>
@endsection

