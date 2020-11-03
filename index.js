let isMenuClicked = false
    document.addEventListener("DOMContentLoaded", () => {
        const menuIcon = document.getElementById('menu-icon');
        const navBar = document.getElementById('mobile-nav')
        const xMenu = document.getElementById('x')
        menuIcon.addEventListener("click", (e) => toggleMenu(e,navBar));
        xMenu.addEventListener("click", (e) => toggleMenu(e,navBar));
    
    })
    
    function toggleMenu(e, navBar){
        e.preventDefault();
        isMenuClicked = !isMenuClicked
        isMenuClicked ? navBar.classList.add('slide-right') : navBar.classList.remove('slide-right')
    }
    


