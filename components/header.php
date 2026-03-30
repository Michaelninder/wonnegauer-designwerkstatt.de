<header class="site-header">

    <img class="site-header__top"
         src="<?= url('assets/img/banners/TOP.jpg') ?>"
         alt="Wonnegauer Designwerkstatt">

    <div class="site-header__identity">
        <a class="site-header__logo-link" href="<?= url() ?>" aria-label="Zur Startseite">
            <img class="site-header__logo-img"
                 src="<?= url('assets/img/logo1.jpg') ?>"
                 alt="<?= htmlspecialchars($config['site_name']) ?>">
        </a>
        <div class="site-header__title-block">
            <span class="site-header__title"><?= htmlspecialchars($config['site_name']) ?></span>
            <span class="site-header__subtitle">Kunst · Kultur · Design · Rheinhessen</span>
        </div>
    </div>

    <?php
        $bannerFile = dirname(__DIR__) . "/public/assets/img/banners/{$page['slug']}.jpg";
        $bannerSrc  = file_exists($bannerFile)
            ? url("assets/img/banners/{$page['slug']}.jpg")
            : url('assets/img/banners/default.jpg');
    ?>
    <img class="site-header__banner"
         src="<?= htmlspecialchars($bannerSrc) ?>"
         alt=""
         role="presentation">

    <nav class="main-nav" aria-label="Hauptnavigation">
        <ul class="main-nav__list">
            <li class="main-nav__item<?= is_active('index') ? ' main-nav__item--active' : '' ?>">
                <a href="<?= url() ?>" <?= is_active('index') ? 'aria-current="page"' : '' ?>>Start</a>
            </li>
            <?php foreach ($config['nav'] as $slug): ?>
                <?php $navPage = $config['pages'][$slug] ?? null; ?>
                <?php if ($navPage): ?>
                    <li class="main-nav__item<?= is_active($slug) ? ' main-nav__item--active' : '' ?>">
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
