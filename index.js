let isMenuClicked = false
document.addEventListener("DOMContentLoaded", () => {
    const menuIcon = document.getElementById('menu-icon');
    const navBar = document.getElementById('mobile-nav')
    const xMenu = document.getElementById('x')
    const inputs = document.getElementsByTagName('input');
    menuIcon.addEventListener("click", (e) => showMenu(e,navBar));
    xMenu.addEventListener("click", (e) => showMenu(e,navBar));
    const checkSeo = document.getElementById('seo')
    checkSeo.addEventListener("click", e => handleRadioBtn(e));
})

function showMenu(e, navBar){
    e.preventDefault();
    isMenuClicked = !isMenuClicked
    isMenuClicked ? navBar.style.display = 'flex' : navBar.style.display = 'none'
}

// when radio button is clicked
function handleRadioBtn(e){
    console.log(e.target)
    
    // let el = e.target
    // e.target.checked? e.target.checked = false : e.target.checked = true
    // console.log(el.checked)
}
function handleRadioBtnasdasda(e){
    console.log(e.target.id)
    const parentNode = Array.from(document.getElementById('contact-checkboxes').children)
    parentNode.forEach( child => {
        const radio = child.firstElementChild
        switch(radio.id){
            case "seo": 
                console.log("seo")
                // radio.checked? radio.checked = false : radio.checked = true
                break;
            case "web-design":
                console.log("web-design")
                break;
            case "advertising":
                console.log("advert")
                break;
            case "social-media":
                console.log("s media")
                break;
        }
        // radio.checked? radio.checked = false : radio.checked = true
    })
    // console.log("radio: ", this.checked == true)
}