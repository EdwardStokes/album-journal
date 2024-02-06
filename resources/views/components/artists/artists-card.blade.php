<div class="blog-post mt-4 mb-4">
    <div class="artists-header">
        <a href="<?= $artist['url']; ?>">
            <img src="{{ asset('storage/' . $artist['image']) }}" alt="{{ $artist['name'] }}">
        </a>
        <h2 class="artist-name"><?= htmlspecialchars($artist['name']); ?>
        </h2>
    </div>

    @if ($artist['biography'])
    <p class="artist-biography">
        <?= htmlspecialchars($artist['biography']); ?>
    </p>
    @endif
</div>

