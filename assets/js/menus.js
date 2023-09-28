function screenWidthSettings () {
    let subMenu = document.querySelectorAll('.sub-menu');
    let mainMenuLinksContainer = document.querySelector('.header-container nav .site-links');

    for (let i = 0; i < subMenu.length; i++) {
        subMenu[i].classList.remove('active');
    }

    mainMenuLinksContainer.style.height = 'auto';
}
function burgerMenu () {
    let burgerMenuButton = document.getElementById('burgerMenuBtn');
    let menu = document.getElementById('mainMenu');
    let body = document.querySelector('body');

    burgerMenuButton.addEventListener('click', function () {
        let theme = document.documentElement.getAttribute('data-theme');
        menu.classList.toggle('active');

        if (menu.getAttribute('class') === 'active') {
            body.style.overflow ='hidden';

            burgerMenuButton.setAttribute('alt', 'multiply');
            if (theme === 'dark') {
                burgerMenuButton.setAttribute('src', 'https://img.icons8.com/000000/fluency-systems-filled/48/menu.png');
            } else if (theme === 'light') {
                burgerMenuButton.setAttribute('src', 'https://img.icons8.com/FFFFFF/sf-regular-filled/48/multiply.png');
            }
        } else {
            body.style.overflow ='auto';

            burgerMenuButton.setAttribute('alt','menu');
            if (theme === 'dark') {
                burgerMenuButton.setAttribute('src', 'https://img.icons8.com/000000/fluency-systems-filled/48/menu.png');
            } else if (theme === 'light') {
                burgerMenuButton.setAttribute('src', 'https://img.icons8.com/FFFFFF/fluency-systems-filled/48/menu.png');

            }
        }
    });

    let subMenu = document.querySelectorAll('.header-container nav .site-links .menu-item-has-children');
    console.log(subMenu);
    let mainMenuLinksContainer = document.querySelector('.header-container nav .site-links');

    for (let i = 0; i < subMenu.length; i++) {
        console.log(subMenu[i]);
        let linkChildren = subMenu[i].children[0];

        subMenu[i].addEventListener('click', function (linkChildren) {
            linkChildren.preventDefault();
            if (mainMenuLinksContainer.style.height === '30rem') {
                mainMenuLinksContainer.style.height = 'auto';
            } else {
                mainMenuLinksContainer.style.height = '30rem';
            }
        });

    }
    window.addEventListener('resize', function (event) {
        if (window.screen.width >= 1024) {
            mainMenuLinksContainer.style.height = 'auto';
        }
    }, true);
}
function foldingMenu () {
    let menu = document.querySelectorAll('.sub-menu');

    let mainMenuLinksContainer = document.querySelector('.header-container nav .site-links');

    for (let i = 0; i < menu.length; i++) {
        let foldingMenuParent = menu[i].parentNode;

        foldingMenuParent.addEventListener('click', function () {
            menu[i].classList.toggle('active');
        })

        window.addEventListener('resize', function (event) {
            if (window.screen.width >= 1024 && menu[i].classList.contains('active')) {
                mainMenuLinksContainer.style.height = 'auto';
                menu[i].classList.remove('active');
            }
        }, true);
    }


}