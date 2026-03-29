<header>
    <a href="<?= url() ?>" aria-label="Zur Startseite">
        <span><?= htmlspecialchars($config['site_name']) ?></span>
    </a>

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
