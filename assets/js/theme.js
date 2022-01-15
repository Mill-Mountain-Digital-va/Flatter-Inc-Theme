// nav hamburger js

let desktop = document.querySelector('.desktop-mobile');
let hambutton = document.querySelector('.hamburger-menu');
const withChild = document.querySelectorAll('page_item_has_children');
const children = document.querySelectorAll('children');
let mobilemenu = document.querySelector('.mobile-menu-icon');


children.forEach(child => {
    child.setAttribute("tabindex", "-1");
})
withChild.forEach(item => {

    addEventListener('keydown', (e) => {
        children = children.closest();

        switch (e.key) {
            case "Down": // IE/Edge specific value
            case "ArrowDown":
                // Do something for "down arrow" key press.
                children.classList.toggle('menu-toggle');
                break;
            case "Up": // IE/Edge specific value
            case "ArrowUp":
                // Do something for "up arrow" key press.

                children.classList.toggle('menu-toggle');
                break;
        }

    })

})
hambutton.addEventListener('click', (e) => {
    desktop.classList.toggle('open');
    hambutton.classList.toggle('spin');
})




document.addEventListener("mousewheel", function (e) {
    if (e.wheelDelta >= 0) {
        console.log("up");
    } else {
        console.log("down");
    }
})


if (mobilemenu.focus()) {
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === 'Return') {
            desktop.classList.toggle('open');
            hambutton.classList.toggle('spin');
        }
    });
}

// key event listener
document.addEventListener("keydown", event => {


    if (mobilemenu.focus()) {



        switch (event.key) {

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



})





