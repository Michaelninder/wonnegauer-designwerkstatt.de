(function () {
    const toggle = document.querySelector('.nav-toggle');
    const nav    = document.getElementById('main-nav');

    if (!toggle || !nav) return;

    function openNav() {
        nav.classList.add('main-nav--open');
        toggle.setAttribute('aria-expanded', 'true');
        toggle.setAttribute('aria-label', 'Navigation schließen');
        document.body.classList.add('nav-open');
    }

    function closeNav() {
        nav.classList.remove('main-nav--open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Navigation öffnen');
        document.body.classList.remove('nav-open');
    }

    toggle.addEventListener('click', function () {
        toggle.getAttribute('aria-expanded') === 'true' ? closeNav() : openNav();
    });

    // close on backdrop click
    document.addEventListener('click', function (e) {
        if (nav.classList.contains('main-nav--open') &&
            !nav.contains(e.target) &&
            !toggle.contains(e.target)) {
            closeNav();
        }
    });

    // close on Escape
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeNav();
    });
})();
