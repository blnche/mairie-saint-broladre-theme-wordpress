function screenWidthSettings (subMenu, mainMenuLinksContainer) {

    for (let i = 0; i < subMenu.length; i++) {
        subMenu[i].classList.remove('active');
    }

    mainMenuLinksContainer.style.height = 'auto';
}
function burgerMenu (burgerMenuButton, body, subMenuParent, mainMenuLinksContainer) {

    burgerMenuButton.addEventListener('click', function () {
        let theme = document.documentElement.getAttribute('data-theme');
        let mainMenu = document.getElementById('mainMenu');
        mainMenu.classList.toggle('active');

        if (mainMenu.getAttribute('class') === 'active') {
            body.style.overflow ='hidden';
            burgerMenuButton.setAttribute('alt', 'multiply');
            if (theme === 'dark') {
                burgerMenuButton.setAttribute('src', 'https://img.icons8.com/000000/sf-regular-filled/48/multiply.png');
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

    if (window.innerWidth < 1024) {

        for (let i = 0; i < subMenuParent.length; i++) {
            let linkChildren = subMenuParent[i].children[0];
            subMenuParent[i].addEventListener('click', function (linkChildren) {
                linkChildren.preventDefault();
                if (mainMenuLinksContainer.style.height === '30rem') {
                    mainMenuLinksContainer.style.height = 'auto';
                } else {
                    mainMenuLinksContainer.style.height = '30rem';
                }
            });
        }
        window.addEventListener('resize', function (event) {

            if (window.innerWidth >= 1024) {
                mainMenuLinksContainer.style.height = 'auto';
            }
        }, true);
    }
}
function foldingMenu (subMenu, mainMenuLinksContainer) {

    if (window.innerWidth < 1024) { //when screen = mobile

        for (let i = 0; i < subMenu.length; i++) { // i get parent item
            let foldingMenuParent = subMenu[i].parentNode;

            foldingMenuParent.addEventListener('click', function () {// when parent item clicked i toggle class active
                subMenu[i].classList.toggle('active');

                window.addEventListener('resize', function (event) {//and i check if size resize then no active clas

                    if (window.innerWidth >= 1024 && subMenu[i].classList.contains('active')) {
                        mainMenuLinksContainer.style.height = 'auto';
                        subMenu[i].classList.remove('active');
                    }
                }, true);
            })
        }
    }
}