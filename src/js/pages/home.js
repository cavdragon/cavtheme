const initHomePage = () => {
    const hero = document.querySelector('.home-hero');

    if (!hero) {
        return;
    }

    const panels = [...hero.querySelectorAll('.home-panel')];
    const hoverMedia = window.matchMedia('(hover: hover) and (pointer: fine)');

    document.body.classList.add('home-page-active');

    const clearActivePanel = () => {
        hero.classList.remove('has-active-panel');
        panels.forEach((panel) => panel.classList.remove('is-active'));
    };

    const setActivePanel = (activePanel) => {
        hero.classList.add('has-active-panel');
        panels.forEach((panel) => {
            panel.classList.toggle('is-active', panel === activePanel);
        });
    };

    panels.forEach((panel) => {
        panel.addEventListener('focus', () => setActivePanel(panel));

        if (hoverMedia.matches) {
            panel.addEventListener('pointerenter', () => setActivePanel(panel));
        }
    });

    hero.addEventListener('pointerleave', () => {
        if (hoverMedia.matches) {
            clearActivePanel();
        }
    });

    hero.addEventListener('focusout', () => {
        window.requestAnimationFrame(() => {
            if (!hero.contains(document.activeElement)) {
                clearActivePanel();
            }
        });
    });
};

initHomePage();
