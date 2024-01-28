<div class="blog-post mt-4 mb-4">
    <div class="post-header">
        <h2 class="album-title"><?= htmlspecialchars($post->album['title']); ?>
            <span class="post-date"><?= htmlspecialchars($post['created_at']); ?></span>
        </h2>
    </div>
    <div class="post-content">
        <?= nl2br(htmlspecialchars($post['content'])); ?>
    </div>
</div>

