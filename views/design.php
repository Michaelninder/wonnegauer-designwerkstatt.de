<section class="page-design">
    <h1>Design</h1>

    <?php foreach ($page['items'] ?? [] as $item): ?>
        <article class="kunst-item<?= ($item['layout'] ?? '') === 'two-col' ? ' kunst-item--two-col' : '' ?>">
            <div class="kunst-item__bilder">
                <?php foreach ($item['bilder'] as $bild): ?>
                    <img src="<?= htmlspecialchars(url($bild)) ?>" alt="">
                <?php endforeach; ?>
            </div>
            <div class="kunst-item__text">
                <p><?= nl2br(htmlspecialchars($item['text'])) ?></p>
            </div>
        </article>
    <?php endforeach; ?>

</section>
