<section>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('New Album') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Add a new album.') }}
            </p>
    </h2>
    <!-- form for adding new album object -->
    <form method="POST" encty action="{{ route('albums.store') }}" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="title" :value-="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- artists multi select -->
        <div>
            <x-input-label for="artists" :value="__('Artists')" />
            <x-multiselect id="artists" name="artists[]" :options="$artists" class="mt-1 block w-full" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('artists')" />
        </div>

        <div>
            <x-input-label for="release_date" :value="__('Release Date')" />
            <x-text-input id="release_date" name="release_date" type="date" class="mt-1 block w-full" required autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('release_date')" />
        </div>

        <div>
            <x-input-label for="image" :value="__('Image')" />
            <x-text-input id="image" name="image" type="text" class="mt-1 block w-full form-control" type="file" autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
