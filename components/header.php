<header>
    <img src="assets/img/banners/<?= htmlspecialchars(file_exists(dirname(__DIR__) . "/public/assets/img/banners/{$page['slug']}.jpg") ? $page['slug'] : 'DEFAULT') ?>.jpg">
    <a href="<?= url() ?>" aria-label="Zur Startseite">
        <span><?= htmlspecialchars($config['site_name']) ?></span>
    </a>
    <img src="assets/img/logo1.jpg">
    <nav aria-label="Hauptnavigation">
        <ul>
            <?php foreach ($config['nav'] as $slug): ?>
                <?php $navPage = $config['pages'][$slug] ?? null; ?>
                <?php if ($navPage): ?>
                    <li>
                        <a href="<?= url($slug) ?>"
                           <?= is_active($slug) ? 'aria-current="page"' : '' ?>>
                            <?= htmlspecialchars($navPage['title']) ?>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>