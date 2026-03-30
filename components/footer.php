<footer class="site-footer">
    <div class="site-footer__inner">
        <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($config['site_name']) ?></p>
        <nav class="footer-nav" aria-label="Footer-Navigation">
            <ul class="footer-nav__list">
                <li>
                    <a href="<?= url('impressum') ?>"
                       <?= is_active('impressum') ? 'aria-current="page"' : '' ?>>Impressum</a>
                </li>
                <li>
                    <a href="<?= url('kontakt') ?>"
                       <?= is_active('kontakt') ? 'aria-current="page"' : '' ?>>Kontakt</a>
                </li>
            </ul>
        </nav>
    </div>
</footer>
