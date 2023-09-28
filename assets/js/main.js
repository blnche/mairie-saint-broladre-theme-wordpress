window.addEventListener('DOMContentLoaded', function () {

    let burgerMenuButton = document.getElementById('burgerMenuBtn');

    let body = document.querySelector('body');
    let subMenuParent = document.querySelectorAll('.header-container nav .site-links .menu-item-has-children');
    let mainMenuLinksContainer = document.querySelector('.header-container nav .site-links');
    let subMenu = document.querySelectorAll('.sub-menu');

    let toggleThemeBtn = document.getElementById("themeBtn");
    let contrastIcon = toggleThemeBtn.children[0];
    let arrowUpParent = document.getElementById('ArrowUpBtn');
    let arrowUpIcon = arrowUpParent.children[0];
    let toggleBurgerMenuIcon = document.getElementById('burgerMenuBtn');

    screenWidthSettings(subMenu, mainMenuLinksContainer);

    //lightDarkMode(toggleThemeBtn, contrastIcon, arrowUpIcon, toggleBurgerMenuIcon);

    burgerMenu(burgerMenuButton, body, subMenuParent, mainMenuLinksContainer);
    foldingMenu(subMenu, mainMenuLinksContainer);
})