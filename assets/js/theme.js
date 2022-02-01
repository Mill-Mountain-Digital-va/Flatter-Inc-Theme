// nav hamburger js

let desktop = document.querySelector('.desktop-mobile');
let hambutton = document.querySelector('.hamburger-menu')
hambutton.addEventListener('click', (event) => {
    desktop.classList.toggle('open')
    hambutton.classList.toggle('spin')
})



// test 1