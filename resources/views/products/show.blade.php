@extends('products.layout')
@section('content')

<div class="flex justify-center">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ $product->name }}</h2>
        <p class="text-gray-600 mb-6">{{ $product->details }}</p>
        <a href="{{ route('products.index') }}" class="inline-block text-sm text-blue-600 hover:underline">← Back to products</a>
    </div>
</div>
@endsection
