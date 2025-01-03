<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex items-center justify-center gap-5 text-gray-900">
                    <a class="h-20 flex items-center justify-center rounded-md w-60 bg-blue-500 text-white" href="{{ route('post.index') }}">Post Management</a>
                    <a class="h-20 flex items-center justify-center rounded-md w-60 bg-blue-500 text-white" href="{{ route('category.index') }}">Category Management</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
