<div class="blog-post mt-4 mb-4">
    <div class="album-header">
        <h2 class="album-title"><?= htmlspecialchars($album['title']); ?>
            <span class="release-date"><?= htmlspecialchars($album['release_date']); ?></span>
        </h2>
    </div>

    @if ($album['description'])
    <p class="album-description">
        <?= htmlspecialchars($album['description']); ?>
    </p>
    @endif
</div>

