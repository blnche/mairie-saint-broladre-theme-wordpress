export function burgerMenu () {
    let burgerMenuButton = document.getElementById('burgerMenuBtn');
    let menu = document.getElementById('mainMenu');
    
    burgerMenuButton.addEventListener('click', function () {
        let theme = document.documentElement.getAttribute('data-theme');
        menu.classList.toggle('active');
        
        if (menu.getAttribute('class') === 'active') {
            burgerMenuButton.setAttribute('alt', 'multiply');
            if (theme === 'dark') {
                burgerMenuButton.setAttribute('src', 'https://img.icons8.com/000000/fluency-systems-filled/48/menu.png');
            } else if (theme === 'light') {
                burgerMenuButton.setAttribute('src', 'https://img.icons8.com/FFFFFF/sf-regular-filled/48/multiply.png');
            }
        } else {
            burgerMenuButton.setAttribute('alt','menu');
            if (theme === 'dark') {
                burgerMenuButton.setAttribute('src', 'https://img.icons8.com/000000/fluency-systems-filled/48/menu.png');
            } else if (theme === 'light') {
                burgerMenuButton.setAttribute('src', 'https://img.icons8.com/FFFFFF/fluency-systems-filled/48/menu.png');
                
            }
        }
    })
}

export function foldingMenu () {
    let menu = document.querySelectorAll('.sub-menu');

    for (let i = 0; i < menu.length; i++) {
        let foldingMenuParent = menu[i].parentNode;
        
        foldingMenuParent.addEventListener('click', function () {
            menu[i].classList.toggle('active');
        })
    }

}