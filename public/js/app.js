const navMenu = document.querySelector('.nav-menu');

addEventListener('DOMContentLoaded', () => {
    const responsiveMenu = document.querySelector('.responsive-menu');

    if (responsiveMenu) {
        responsiveMenu.addEventListener('click', () => {
            navMenu.classList.toggle('show');
            })
        }
    });

