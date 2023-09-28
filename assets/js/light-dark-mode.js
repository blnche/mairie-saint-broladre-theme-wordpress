function lightDarkMode (toggleThemeBtn, contrastIcon, arrowUpIcon, toggleBurgerMenuIcon) {
    console.log('theme color');

    if (!document.documentElement.hasAttribute('data-theme')) {
        console.log('here ?');
        document.documentElement.setAttribute('data-theme', 'light');
    }

    toggleThemeBtn.addEventListener("click", function () {
        console.log('clicked')

        let theme = document.documentElement.getAttribute('data-theme');
        console.log(theme)



            let newTheme = theme === 'dark' ? 'light' : theme === 'light' ? 'dark' : theme === '' ? 'light' : theme;

            if (newTheme === 'dark') {
                contrastIcon.setAttribute('src', 'https://img.icons8.com/000000/material-rounded/48/contrast.png');
                arrowUpIcon.setAttribute('src', 'https://img.icons8.com/000000/fluency-systems-regular/48/up--v1.png');
                toggleBurgerMenuIcon.setAttribute('src', 'https://img.icons8.com/000000/fluency-systems-filled/48/menu.png')
            } else if (newTheme === 'light') {
                contrastIcon.setAttribute('src', 'https://img.icons8.com/FFFFFF/material-rounded/48/contrast.png');
                arrowUpIcon.setAttribute('src', 'https://img.icons8.com/FFFFFF/fluency-systems-regular/48/up--v1.png');
                toggleBurgerMenuIcon.setAttribute('src', 'https://img.icons8.com/FFFFFF/fluency-systems-filled/48/menu.png')
            }


            document.documentElement.setAttribute('data-theme', newTheme);



    });

}