<section>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Artists') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Browse artists below.') }}
            </p>
    </h2>
    @foreach ($artists as $artist)
        <x-artists.artists-card :artist="$artist" />
        <hr class="divider"> 
    @endforeach 
</section>
