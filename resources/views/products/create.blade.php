@extends('products.layout')
@section('content')

<h1 class="text-blue-400">Create New Product</h1>

<div class="flex justify-center">
<form action="{{ route('products.store') }}" method="POST" class="mt-4 w-full max-w-md">
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


   <a class=" bg-blue-400 p-1" href="{{ route('products.index') }}">Go back</a>
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Product Name:</label>
        <input type="text" name="name" id="name" class="w-full px-3 py-2 border rounded">
    </div>
    <div class="mb-4">
        <label for="details" class="block text-gray-700">Details:</label>
        <textarea name="details" id="details" class="w-full px-3 py-2 border rounded"></textarea>
    </div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Product</button>
</form>
</div>

@endsection
