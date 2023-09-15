export function burgerMenu () {
    let burgerMenuButton = document.getElementById('burgerMenuBtn');
    let menu = document.getElementById('mainMenu');

    burgerMenuButton.addEventListener('click', function () {
        menu.classList.toggle('active');
        if (menu.getAttribute('class') === 'active') {
            burgerMenuButton.setAttribute('src', 'https://img.icons8.com/FFFFFF/ios/50/multiply.png')
        } else {
            burgerMenuButton.setAttribute('src', 'https://img.icons8.com/FFFFFF/ios/50/menu--v7.png')
        }
    })
}