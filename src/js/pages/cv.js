const skillSections = document.querySelectorAll('.web-cv__skills');
const roles = document.querySelectorAll('.web-cv__role');

if (roles.length) {
    document.documentElement.classList.add('has-js');

    const showRole = (role) => role.classList.add('is-visible');

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || !('IntersectionObserver' in window)) {
        roles.forEach(showRole);
    } else {
        const roleObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    showRole(entry.target);
                    roleObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        roles.forEach((role, index) => {
            role.style.setProperty('--reveal-delay', `${index % 3 * 100}ms`);
            roleObserver.observe(role);
        });
    }
}

if (skillSections.length) {
    const showSkills = (section) => {
        section.querySelectorAll('.web-cv__skill-track').forEach((track) => {
            track.style.setProperty('--skill-level', `${track.dataset.level}%`);
        });

        section.classList.add('is-visible');
    };

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || !('IntersectionObserver' in window)) {
        skillSections.forEach(showSkills);
    } else {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    showSkills(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.25 });

        skillSections.forEach((section) => observer.observe(section));
    }
}
