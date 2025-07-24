const menuToggle = document.getElementById('menu-toggle');
const menuClose = document.getElementById('menu-close');
const menu = document.getElementById('menu');
const menuLinks = document.querySelectorAll('.menu a');

menuToggle.addEventListener('click', () => {
    menu.classList.toggle('open');
});

menuClose.addEventListener('click', () => {
    menu.classList.remove('open');
});

menuLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        const targetId = link.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        menu.classList.remove('open');
        targetElement.scrollIntoView({ behavior: 'smooth' });
    });
});
