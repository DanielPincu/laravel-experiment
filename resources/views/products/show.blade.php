<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-4">

                    <a class="inline-block text-sm text-blue-600 hover:underline" href="{{ route('products.index') }}">← Back to products</a>

                    <div class="mt-6 w-full max-w-2xl mx-auto bg-gray-50 dark:bg-gray-900 shadow-md rounded-lg p-8 space-y-3">
                        <h2 class="text-2xl font-semibold">{{ $product->name }}</h2>
                        <p class="text-gray-700 dark:text-gray-300">{{ $product->details ?? $product->detail }}</p>

                        <div class="flex gap-2 pt-2">
                            @auth
                                <a href="{{ route('products.edit', $product->id) }}"
                                   class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">Edit</a>

                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                      onsubmit="return confirm('Delete this product?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                                </form>
                            @endauth
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
