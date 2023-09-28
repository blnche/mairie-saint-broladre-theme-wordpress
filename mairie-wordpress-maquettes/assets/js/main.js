window.addEventListener('DOMContentLoaded', function () {
    console.log('DOMContentLoaded event fired.');
    let theme = document.documentElement.getAttribute('data-theme');
    let burgerMenuButton = document.getElementById('burgerMenuBtn');
    let mainMenu = document.getElementById('mainMenu');
    let body = document.querySelector('body');
    let subMenuParent = document.querySelectorAll('.header-container nav .site-links .menu-item-has-children');
    let mainMenuLinksContainer = document.querySelector('.header-container nav .site-links');
    let subMenu = document.querySelectorAll('.sub-menu');
    console.log(theme);
    screenWidthSettings();
    ligthDarkMode();
    burgerMenu();
    foldingMenu();
})