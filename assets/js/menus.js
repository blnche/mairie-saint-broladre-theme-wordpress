function screenWidthSettings () {
    let subMenu = document.querySelectorAll('.sub-menu');
    let mainMenuLinksContainer = document.querySelector('.header-container nav .site-links');

    for (let i = 0; i < subMenu.length; i++) {
        subMenu[i].classList.remove('active');
    }

    mainMenuLinksContainer.style.height = 'auto';
}
function burgerMenu () {
// use the touchstart event listener to only activate folding submenu on mobile ? and use hover state for desktop ?
    let burgerMenuButton = document.getElementById('burgerMenuBtn');
    let menu = document.getElementById('mainMenu');
    let body = document.querySelector('body');

    let liWithSubMenu = document.querySelectorAll('.menu-item-has-children');
    console.log(liWithSubMenu);

    for(let i = 0; i < liWithSubMenu.length; i++) {

        let parent = liWithSubMenu[i].parentNode;
        let divMenu = liWithSubMenu[i].parentNode.parentNode;
        console.log(divMenu);

        if (parent.classList.contains('sub-menu')) {
            // We don't append a span element to submenu item with submenu
        } else if (divMenu.classList.contains('menu-menu-principal-container')) {
            let span = document.createElement("span");
            let arrow = document.createTextNode('⬇︎');
            span.appendChild(arrow);
            liWithSubMenu[i].appendChild(span);
        }
    }

    burgerMenuButton.addEventListener('click', function () {

        menu.classList.toggle('mainMenuActive');

        if (menu.getAttribute('class') === 'mainMenuActive') {
            body.style.overflow ='hidden';
        } else {
            body.style.overflow ='auto';
        }


    });
}
function foldingMenu () {
    let menu = document.querySelectorAll('.sub-menu');

    for (let i = 0; i < menu.length; i++) {
        let foldingMenuParent = menu[i].parentNode;

        foldingMenuParent.addEventListener('click', function () {
            console.log('clicked');
            menu[i].classList.toggle('active');
        })

        for (let j = 0; j < menu[i].children.length; j++) {

            if (menu[i].children[j].classList.contains('menu-item-has-children')) {
                let subSubMenu = menu[i].children[j].children[1];
                console.log(subSubMenu);
                subSubMenu.style.display = 'none';
            }
        }
    }


}