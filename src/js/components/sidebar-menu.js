const sidebarToggles = document.querySelectorAll('.sidebar-menu__toggle');

if (sidebarToggles.length) {
    document.documentElement.classList.add('has-sidebar-menu');

    sidebarToggles.forEach((toggle, index) => {
        const sidebar = toggle.closest('aside');
        const navigation = sidebar?.querySelector('nav');

        if (!navigation) {
            toggle.hidden = true;
            return;
        }

        const navigationId = `sidebar-navigation-${index + 1}`;
        navigation.id = navigationId;
        toggle.setAttribute('aria-controls', navigationId);

        toggle.addEventListener('click', () => {
            const isOpen = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', String(!isOpen));
            sidebar.classList.toggle('is-sidebar-menu-open', !isOpen);
        });
    });
}
