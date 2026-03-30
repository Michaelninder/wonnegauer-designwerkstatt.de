(function () {
    const toggle = document.querySelector('.nav-toggle');
    const close  = document.querySelector('.nav-close');
    const nav    = document.getElementById('main-nav');

    if (!toggle || !nav) return;

    function openNav() {
        nav.classList.add('main-nav--open');
        toggle.setAttribute('aria-expanded', 'true');
        document.body.classList.add('nav-open');
    }

    function closeNav() {
        nav.classList.remove('main-nav--open');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('nav-open');
    }

    toggle.addEventListener('click', openNav);
    if (close) close.addEventListener('click', closeNav);

    // close on backdrop click (outside nav)
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
