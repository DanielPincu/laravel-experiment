<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-4">
                    <p>{{ __("You're logged in!") }}</p>

                    <div class="flex flex-wrap gap-3">
                        <a href="{{ route('profile.edit') }}"
                           class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Edit Profile
                        </a>

                        <a href="{{ url('/') }}"
                           class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">
                            Go to Products
                        </a>

                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
