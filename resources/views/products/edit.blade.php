@extends('products.layout')
@section('content')
<h1 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Edit Product</h1>

<div class="flex justify-center px-4">
    <form action="{{ route('products.update', $product->id) }}" method="POST" class="w-full max-w-md bg-white shadow-md rounded-lg p-6 space-y-4">
        @csrf
        @method('PUT')

        @if ($errors->any())
            <div class="rounded bg-red-100 text-red-800 px-4 py-2">
                <strong class="block mb-1">Whoops!</strong>
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a class="inline-block text-sm text-blue-600 hover:underline mb-2" href="{{ route('products.index') }}">← Back to products</a>

        <div>
            <label for="name" class="block text-gray-700 mb-1">Product Name</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $product->name) }}"
                class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400"
            >
        </div>

        <div>
            <label for="details" class="block text-gray-700 mb-1">Details</label>
            <textarea
                id="details"
                name="details"
                rows="4"
                class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400"
            >{{ old('details', $product->details) }}</textarea>
        </div>

        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 transition text-white px-4 py-2 rounded font-medium">
            Save Changes
        </button>
    </form>
</div>
@endsection
