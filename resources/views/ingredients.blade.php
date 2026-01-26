@extends('layouts.app')

@section('content')
<div class="p-6">
<h1 class="text-2xl font-bold text-gray-800 mb-6">Ingredients</h1>
<livewire:pos category="ingredient" />
</div>
@endsection

