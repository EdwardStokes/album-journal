<section>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Albums') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Browse albums below.') }}
            </p>
    </h2>
    @foreach ($albums as $album)
        <x-albums.albums-card :album="$album" />
        <hr class="divider"> 
    @endforeach 
</section>
