const mobileQuery = window.matchMedia('(max-width: 767px)');
const header = document.querySelector('.site-header:not(.site-header--home)');

if (header) {
    const toggle = header.querySelector('.site-header__menu-toggle');
    const nav = header.querySelector('.site-header__nav');
    const backdrop = header.querySelector('.site-header__backdrop');
    const firstLink = nav?.querySelector('a');

    const closeMenu = ({ restoreFocus = false } = {}) => {
        header.classList.remove('is-menu-open');
        toggle?.setAttribute('aria-expanded', 'false');
        toggle?.setAttribute('aria-label', 'Abrir menú');
        document.body.classList.remove('has-open-mobile-menu');

        if (restoreFocus) {
            toggle?.focus();
        }
    };

    const openMenu = () => {
        header.classList.add('is-menu-open');
        toggle?.setAttribute('aria-expanded', 'true');
        toggle?.setAttribute('aria-label', 'Cerrar menú');
        document.body.classList.add('has-open-mobile-menu');
        firstLink?.focus();
    };

    toggle?.addEventListener('click', () => {
        if (header.classList.contains('is-menu-open')) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    backdrop?.addEventListener('click', () => closeMenu({ restoreFocus: true }));

    nav?.addEventListener('click', (event) => {
        if (event.target.closest('a') && mobileQuery.matches) {
            closeMenu();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && header.classList.contains('is-menu-open')) {
            closeMenu({ restoreFocus: true });
        }
    });

    mobileQuery.addEventListener('change', (event) => {
        if (!event.matches) {
            closeMenu();
        }
    });
}
