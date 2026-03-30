<section class="page-kunst">
    <h1>Kunst</h1>

    <?php foreach ($page['items'] ?? [] as $item): ?>
        <article class="kunst-item">
            <div class="kunst-item__bilder">
                <?php foreach ($item['bilder'] as $bild): ?>
                    <img src="<?= htmlspecialchars(url($bild)) ?>"
                         alt=""
                         role="presentation">
                <?php endforeach; ?>
            </div>
            <div class="kunst-item__text">
                <p><?= nl2br(htmlspecialchars($item['text'])) ?></p>
            </div>
        </article>
    <?php endforeach; ?>
</section>
