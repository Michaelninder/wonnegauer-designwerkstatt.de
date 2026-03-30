<footer class="site-footer">
    <div class="site-footer__inner">
        <div class="site-footer__info">
            <strong><?= htmlspecialchars($config['site_name']) ?></strong>
            <span>Plenzer 6, 67592 Flörsheim-Dalsheim</span>
            <span>Telefon: <a href="tel:+496243564">06243 / 56 49</a></span>
        </div>
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
        <p class="site-footer__copy">&copy; <?= date('Y') ?> <?= htmlspecialchars($config['site_name']) ?></p>
    </div>
</footer>
