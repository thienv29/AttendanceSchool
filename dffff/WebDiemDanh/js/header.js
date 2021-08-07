
window.addEventListener('scroll', function () {
    const logo = document.querySelector('.iconHeaderImg')
    const head = document.querySelector('.header')
    const sticky = document.querySelector('.to-top-sticky')
    if (window.pageYOffset > 70) {
        head.style.backgroundColor = "white"
        head.style.boxShadow = "5px 5px 10px rgba(0,0,0,0.4)"
        head.style.height = "60px"
        logo.style.height = "50px"
        sticky.style.width = "50px"
        sticky.style.height = "50px"

        
    } else {
        head.style.boxShadow = "none"
        head.style.backgroundColor = "transparent"
        logo.style.width = "60px"
        head.style.height = "80px"
        sticky.style.width = "0px"
        sticky.style.height = "0px"
        
    }
})

