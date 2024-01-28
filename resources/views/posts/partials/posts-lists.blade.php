<section>
    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Your Posts') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('See your posts below.') }}
            </p>
    </h2>
    @foreach ($posts as $post)
    <x-posts.posts-card :post="$post" />
    <hr class="divider"> 
    @endforeach
</section>
