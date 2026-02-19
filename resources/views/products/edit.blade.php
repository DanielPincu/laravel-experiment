<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-4">

                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                            <ul class="list-disc ps-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <a class="inline-block text-sm text-blue-600 hover:underline" href="{{ route('products.index') }}">← Back to products</a>

                    <form action="{{ route('products.update', $product->id) }}" method="POST" class="mt-6 w-full max-w-2xl mx-auto bg-gray-50 dark:bg-gray-900 shadow-md rounded-lg p-8 space-y-5">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="name" class="block text-gray-700 dark:text-gray-300">Product Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}"
                                   class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400" />
                        </div>

                        <div>
                            <label for="details" class="block text-gray-700 dark:text-gray-300">Details</label>
                            <textarea name="details" id="details" rows="4"
                                      class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400">{{ old('details', $product->details) }}</textarea>
                        </div>

                        <div class="flex gap-2">
                            <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                Save Changes
                            </button>
                            <a href="{{ route('products.index') }}"
                               class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">
                                Cancel
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
