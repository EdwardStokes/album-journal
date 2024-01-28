<section>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('New Post') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Add your post.') }}
            </p>
    </h2>
    <!-- form for adding new post object -->
    <form method="POST" action="{{ route('posts.store') }}" class="mt-6 space-y-6">
        @csrf
        <div>
            <x-input-label for="album_id" :value="__('Album')" />
            <select id="album_id" name="album_id" class="mt-1 block w-full" required autofocus>
                @foreach($albums as $album)
                    <option value="{{ $album->id }}" {{ old('album_id', $user->album_id) == $album->id ? 'selected' : '' }}>
                        {{ $album->title }}
                    </option>
                @endforeach
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('album_id')" />
        </div>

        <div>
            <x-input-label for="content" :value="__('Content')" />
            <x-textarea id="content" name="content" class="mt-1 block w-full" rows="5" required autofocus></x-textarea>
            <x-input-error class="mt-2" :messages="$errors->get('content')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>  
</section>
