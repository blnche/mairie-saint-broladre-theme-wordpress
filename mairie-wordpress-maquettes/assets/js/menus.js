export function burgerMenu () {
    let burgerMenuButton = document.getElementById('burgerMenuBtn');
    let menu = document.getElementById('mainMenu');

    burgerMenuButton.addEventListener('click', function () {
        menu.classList.toggle('active');
        if (menu.getAttribute('class') === 'active') {
            burgerMenuButton.setAttribute('src', 'https://img.icons8.com/FFFFFF/sf-regular-filled/48/multiply.png');
            burgerMenuButton.setAttribute('alt', 'multiply');
        } else {
            burgerMenuButton.setAttribute('src', 'https://img.icons8.com/FFFFFF/fluency-systems-filled/48/menu.png');
            burgerMenuButton.setAttribute('alt','menu');
        }
    })
}

export function foldingMenu () {
    let menu = document.getElementById('subMenu');
    let foldingMenuParent = menu.parentNode;
    
    foldingMenuParent.addEventListener('click', function () {
        menu.classList.toggle('active');
    })
}