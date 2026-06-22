const mobileMenuButton = document.querySelector('[data-mobile-menu-button]');
const mobileMenu = document.querySelector('[data-mobile-menu]');
const navLinks = document.querySelectorAll('[data-nav-link]');
const sections = document.querySelectorAll('main section[id]');

mobileMenuButton?.addEventListener('click', () => {
    const isOpen = mobileMenu?.classList.toggle('hidden') === false;
    mobileMenuButton.setAttribute('aria-expanded', String(isOpen));
});

navLinks.forEach((link) => {
    link.addEventListener('click', () => {
        mobileMenu?.classList.add('hidden');
        mobileMenuButton?.setAttribute('aria-expanded', 'false');
    });
});

const setActiveLink = (id) => {
    navLinks.forEach((link) => {
        const isActive = link.getAttribute('href') === `#${id}`;
        link.classList.toggle('text-blue-700', isActive);
        link.classList.toggle('text-slate-600', !isActive);
    });
};

if (sections.length > 0) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    setActiveLink(entry.target.id);
                }
            });
        },
        {
            rootMargin: '-35% 0px -55% 0px',
            threshold: 0,
        },
    );

    sections.forEach((section) => observer.observe(section));
}
