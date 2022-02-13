// nav hamburger js

let desktop = document.querySelector('.desktop-mobile');
let hambutton = document.querySelector('.hamburger-menu');
const withChild = document.querySelectorAll('.page_item_has_children');
const children = document.querySelectorAll('.children');
let mobilemenu = document.querySelector('.mobile-menu-icon');



children.forEach(item => {
    item.setAttribute("tabindex", "0");
})
withChild.forEach(item => {
    let caret = document.createElement('i');
    caret.innerHTML = "&#9662;";//caret
    caret.classList.add('caret');
    item.appendChild(caret);




})







hambutton.addEventListener('click', (e) => {
    desktop.classList.toggle('open');
    hambutton.classList.toggle('spin');
})




// document.addEventListener("mousewheel", function (e) {
//     if (e.wheelDelta >= 0) {
//         return null
//     } else {
//         return null
//     }
// })



// key event listener
mobilemenu.addEventListener("keydown", e => {




    if (mobilemenu === document.activeElement) {

        switch (e.key) {

            case "Down": // IE/Edge specific value
            case "ArrowDown":
                desktop.classList.toggle('open');
                hambutton.classList.toggle('spin');
                // Do something for "down arrow" key press.
                break;
            case "Up": // IE/Edge specific value
            case "ArrowUp":
                // Do something for "up arrow" key press.
                desktop.classList.toggle('open');
                hambutton.classList.toggle('spin');
                break;
            case "Enter": // For "enter" or "return" key press.
                desktop.classList.toggle('open');
                hambutton.classList.toggle('spin');
                break;

            default:
                return; // Quit when this doesn't handle the key event.

        }

    }

    // if (withChild === document.activeElement) {


    //     switch (e.key) {

    //         case "Down": // IE/Edge specific value
    //         case "ArrowDown":
    //             target = .closest;


    //             // Do something for "down arrow" key press.
    //             break;
    //         case "Up": // IE/Edge specific value
    //         case "ArrowUp":
    //             // Do something for "up arrow" key press.
    //             desktop.classList.toggle('open');
    //             hambutton.classList.toggle('spin');
    //             break;
    //         case "Enter": // For "enter" or "return" key press.
    //             desktop.classList.toggle('open');
    //             hambutton.classList.toggle('spin');
    //             break;

    //         default:
    //             return; // Quit when this doesn't handle the key event.

    //     }

    // }


})



