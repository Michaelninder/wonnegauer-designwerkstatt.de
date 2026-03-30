<article class="page-links">
    <h1>Links, Kooperationen und interessante Seiten</h1>

    <ul class="links-liste">
        <?php foreach ($page['items'] ?? [] as $item): ?>
            <li class="links-item">
                <?php if (!empty($item['img'])): ?>
                    <img class="links-item__img"
                         src="<?= htmlspecialchars(url($item['img'])) ?>"
                         alt="<?= htmlspecialchars($item['titel'] ?? '') ?>">
                <?php endif; ?>
                <div class="links-item__body">
                    <?php if (!empty($item['titel'])): ?>
                        <span class="links-item__titel"><?= htmlspecialchars($item['titel']) ?></span>
                    <?php endif; ?>
                    <a href="<?= htmlspecialchars($item['url']) ?>"
                       target="_blank"
                       rel="noopener noreferrer">
                        <?= htmlspecialchars($item['url']) ?>
                    </a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</article>
