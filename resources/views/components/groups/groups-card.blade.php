<div class="blog-post mt-4 mb-4">
    <div class="groups-header">
        <a href="<?= $group['url']; ?>">
            <img src="{{ asset('storage/' . $group['image']) }}" alt="{{ $group['name'] }}">
        </a>
        <h2 class="group-name"><?= htmlspecialchars($group['name']); ?>
        </h2>
    </div>

    @if ($group['biography'])
    <p class="group-biography">
        <?= htmlspecialchars($group['biography']); ?>
    </p>
    @endif
</div>

