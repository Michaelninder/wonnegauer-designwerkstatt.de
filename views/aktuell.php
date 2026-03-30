<article class="page-aktuell">
    <h1>Aktuell</h1>

    <?php foreach ($page['items'] ?? [] as $item): ?>
        <p>
            <?= nl2br(htmlspecialchars($item['text'])) ?>
            <?php if (!empty($item['link'])): ?>
                Info unter: <a href="<?= htmlspecialchars($item['link']['href']) ?>"
                               target="_blank"
                               rel="noopener noreferrer">
                    <?= htmlspecialchars($item['link']['label']) ?>
                </a>
            <?php endif; ?>
        </p>
    <?php endforeach; ?>
</article>
