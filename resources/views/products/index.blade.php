<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-4">

                    @if (session('success'))
                        <div class="rounded bg-green-100 text-green-800 px-4 py-2">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="flex justify-end mb-4">
                        @auth
                            <a href="{{ route('products.create') }}"
                               class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                Create New Product
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                               class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                Login to create product
                            </a>
                        @endauth
                    </div>

                    <div class="space-y-3">
                        @foreach ($products as $product)
                            <div class="bg-gray-50 dark:bg-gray-900 rounded border border-gray-200 dark:border-gray-700 p-4 flex items-center justify-between">
                                <div>
                                    <div class="font-semibold">{{ $product->name }}</div>
                                    <div class="text-sm text-gray-600 dark:text-gray-400">{{ $product->detail }}</div>
                                </div>

                                <div class="flex gap-2">
                                    <a href="{{ route('products.show', $product->id) }}"
                                       class="inline-flex items-center px-3 py-1 rounded bg-green-600 text-white hover:bg-green-700">Show</a>

                                    @auth
                                        <a href="{{ route('products.edit', $product->id) }}"
                                           class="inline-flex items-center px-3 py-1 rounded bg-yellow-600 text-white hover:bg-yellow-700">Edit</a>

                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                              onsubmit="return confirm('Delete this product?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="inline-flex items-center px-3 py-1 rounded bg-red-600 text-white hover:bg-red-700">Delete</button>
                                        </form>
                                    @endauth
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-4">
                        {{ $products->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
