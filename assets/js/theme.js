// nav hamburger js

var desktop = document.querySelector('.desktop-mobile');
var hambutton = document.querySelector('.hamburger-menu')
hambutton.addEventListener('click', (event) => {
    desktop.classList.toggle('open')
    hambutton.classList.toggle('spin')
})
