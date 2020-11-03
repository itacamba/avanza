/*  */




window.addEventListener("DOMContentLoaded", () => {
    console.log("Dom is loaded")

    // Goes to Services Div
    document.querySelectorAll('.services').forEach(item => {
        item.addEventListener('click', e => {
            e.preventDefault();
            smoothScroll('#services', 500)
        })
      })
    // Goes to Contact Section 
    document.querySelectorAll('.contact').forEach(item => {
        item.addEventListener('click', e => {
            e.preventDefault();
            smoothScroll('#contact-section',700)
        })
    })




    // servicesLink.addEventListener("click", (e) => {
    //     e.preventDefault();
    //     console.log("Services clicked")
    //     smoothScroll('#services', 2000)
    // })
    
    // contact smooth scroll
    
    // let contactLink = document.querySelector('.contact')
    // contactLink.addEventListener("click", () => {
    //     e.preventDefault();
    //     console.log("Services clicked")
    //     smoothScroll('#contact-section', 2000)
    // })


    function smoothScroll(node, duration) {

        let target = document.querySelector(node)
        let targetPosition = target.getBoundingClientRect().top;
        let startingPosition = window.pageYOffset;
        let distance = targetPosition - startingPosition;
        let startTime = null
    
    
    
        function animation(currentTime){
            if(startTime === null ) startTime = currentTime
            let timeElapsed = currentTime - startTime
            let run = ease(timeElapsed, startingPosition, distance, duration)
            window.scrollTo(0,run);
            if(timeElapsed < duration) requestAnimationFrame(animation)
        }
    
        function ease (t, b, c, d) {
            t /= d/2;
            if (t < 1) return c/2*t*t + b;
            t--;
            return -c/2 * (t*(t-2) - 1) + b;
        };
    
        requestAnimationFrame(animation);
    }
    
    
    




})

