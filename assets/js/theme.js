// nav hamburger js

let desktop = document.querySelector('.desktop-mobile');
let hambutton = document.querySelector('.hamburger-menu')
hambutton.addEventListener('click', (event) => {
    desktop.classList.toggle('open')
    hambutton.classList.toggle('spin')
})


document.addEventListener("mousewheel", function (event) {
    if (event.wheelDelta >= 0) {
        console.log("up")
    } else {
        console.log("down")
    }
})

