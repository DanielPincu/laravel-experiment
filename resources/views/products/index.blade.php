@extends('products.layout')
@section('content')

<div class="flex justify-center">
    <div class="w-full max-w-4xl">
        @if (session('success'))
            <div class="mb-4 rounded bg-green-100 text-green-800 px-4 py-2">
                {{ session('success') }}
            </div>
        @endif
        <div class="flex justify-end mb-4">
            <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create New Product</a>
        </div>
        <div class="space-y-3">
            @foreach ($products as $product)
                <div class="bg-white rounded border p-4 flex items-center justify-between">
                    <div>
                        <div class="font-semibold">{{ $product->name }}</div>
                        <div class="text-sm text-gray-600">{{ $product->detail }}</div>
                    </div>

                    <div class="flex gap-2">
                        <a href="{{ route('products.show', $product->id) }}" class="bg-green-500 text-white px-3 py-1 rounded">Show</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Delete this product?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $products->links() }}
        </div>
    </div>
</div>

@endsection
