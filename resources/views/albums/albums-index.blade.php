<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Albums') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <section class="mt-5">
                <a href="{{ route('albums.create') }}" class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black uppercase transition bg-blue-500 rounded shadow ripple hover:shadow-lg focus:outline-none">
                    {{ __('Add New Album') }}
                </a>
            </section>      
        
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('albums.partials.albums-list')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>