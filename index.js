let isMenuClicked = false
document.addEventListener("DOMContentLoaded", () => {
    const menuIcon = document.getElementById('menu-icon');
    const navBar = document.getElementById('mobile-nav')
    const xMenu = document.getElementById('x')
    menuIcon.addEventListener("click", (e) => showMenu(e,navBar));
    xMenu.addEventListener("click", (e) => showMenu(e,navBar));
})

function showMenu(e, navBar){
    e.preventDefault();
    isMenuClicked = !isMenuClicked
    isMenuClicked ? navBar.style.display = 'flex' : navBar.style.display = 'none'
}