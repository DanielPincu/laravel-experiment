@extends('products.layout')
@section('content')

<h1 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Create New Product</h1>

<div class="flex justify-center px-4">
<form action="{{ route('products.store') }}" method="POST" class="w-full max-w-md bg-white shadow-md rounded-lg p-6 space-y-4">
        @csrf

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


   <a class="inline-block text-sm text-blue-600 hover:underline mb-2" href="{{ route('products.index') }}">← Back to products</a>
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Product Name:</label>
        <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
    </div>
    <div class="mb-4">
        <label for="details" class="block text-gray-700">Details:</label>
        <textarea name="details" id="details" rows="4" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400"></textarea>
    </div>
    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 transition text-white px-4 py-2 rounded font-medium">Create Product</button>
</form>
</div>

@endsection
