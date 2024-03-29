<section>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('New Group') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Add a new group.') }}
            </p>
    </h2>
    <!-- form for adding new album object -->
    <form method="POST" enctype="multipart/form-data" action="{{ route('groups.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="name" :value-="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="image" :value="__('Image')" />
            <x-text-input id="image" name="image" type="text" class="mt-1 block w-full form-control" type="file" autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>

        <div>
            <x-input-label for="artists" :value="__('Artists')" />
            <x-multiselect id="artists" name="artists[]" :options="$artists" class="mt-1 block w-full" autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('artists')" />
        </div>

        <div>
            <x-input-label for="biography" :value="__('Biography')" />
            <x-text-input id="biography" name="biography" type="text" class="mt-1 block w-full" autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('biography')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
