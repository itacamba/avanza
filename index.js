let isMenuClicked = false
document.addEventListener("DOMContentLoaded", () => {
    const menuIcon = document.getElementById('menu-icon');
    const navBar = document.getElementById('mobile-nav')
    const xMenu = document.getElementById('x')
    menuIcon.addEventListener("click", (e) => showMenu(e,navBar));
    xMenu.addEventListener("click", (e) => showMenu(e,navBar));
    const formNode = document.getElementById("form-node")
    formNode.addEventListener("submit", (e) => handleFormSubmit(e))
})

function showMenu(e, navBar){
    e.preventDefault();
    isMenuClicked = !isMenuClicked
    isMenuClicked ? navBar.style.display = 'flex' : navBar.style.display = 'none'
}



const handleFormSubmit = (e) => {
    e.preventDefault()
    const name = document.querySelector("#name-email input[name='name']")
    const email = document.querySelector('#name-email input[name="email')
    const companyName = document.querySelector('#form-node input[name="company"]')
    const message = document.querySelector('#form-node textarea')
    const pError = document.querySelector('.form-error')
    if(!email.value || !name.value || !companyName.value || !message.value){
        pError.innerText = "Please fill all required fields" 
        e.target.classList.add("invalid");
        setTimeout(() => e.target.classList.remove('invalid'), 1000)
    } else {
        pError.innerText = ""
    }
}