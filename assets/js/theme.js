// nav hamburger js

let desktop = document.querySelector('.desktop-mobile');
let hambutton = document.querySelector('.hamburger-menu');
const withChild = document.querySelectorAll('.menu-item-has-children');
const children = document.querySelectorAll('.sub-menu');
let mobilemenu = document.querySelector('.mobile-menu-icon');
const pageItems = document.querySelectorAll('.menu-item');
const buttons = document.querySelectorAll('button');
let searchbar = document.querySelector("#wp-block-search__input-1");
let searchButton = document.querySelector(".wp-block-search__button ");
const accordions = document.querySelectorAll(".mill-mountain-accordion-button");
const accordionSub = document.querySelectorAll(".accordion-sub-container");
const mainMenu = document.querySelector(".menu-menu-container");
let customLogo = document.querySelector(".custom-logo-link");

customLogo.setAttribute("href", "/");


mainMenu.setAttribute("class", "menu");


buttons.forEach(item => {
    item.addEventListener('click', (e) => {
        item.classList.add('button-animation');
    })
})

children.forEach(item => {
    item.setAttribute("tabindex", "0");
    desktop.classList.remove('open');
    hambutton.classList.remove('spin');
   
})

withChild.forEach(item => {
    let caret = document.createElement('i');
    caret.innerHTML = "&#9662;";//caret
    caret.classList.add('caret');
    item.appendChild(caret);
    item.addEventListener('click', (e) => {
        

        target.classList.toggle('blink');

    })

})

pageItems.forEach(item => {
    item.addEventListener("click", (e) => {
        target = e.target;
       
    
      
        if (target.classList != "blink" ){
            e.target.classList.toggle('blink');
            desktop.classList.remove('open');
            hambutton.classList.remove('spin');
         


        }
        else if (target.classList == "blink"){
            e.target.classList.remove("blink");
            e.target.classList.add("blink");
            desktop.classList.remove('open');
            hambutton.classList.remove('spin');
         
        }
    })
})

accordionSub.forEach((item,index) =>{
    item.setAttribute("class", "accordion-event-target");
    item.setAttribute("id", `accordion-${index}`);

    
});

accordions.forEach((item , index) =>{
    
    item.addEventListener('click', (event) => {
        let toggleAccordion = accordionSub[index];
        toggleAccordion.classList.toggle('u-none'); 
    })
})


hambutton.addEventListener('click', (e) => {
    desktop.classList.toggle('open');
    hambutton.classList.toggle('spin');
})




//Search bar text
searchbar.setAttribute('placeholder', 'What can we help you with?');
searchButton.setAttribute('title', 'search here');
searchButton.setAttribute('alt', 'search here');

// let scrollContainer = function(container, direction) {
//     var amount = direction * container.clientWidth;
//     container.scrollLeft+=amount; 
// }


// let leftArrow = document.querySelectorAll(".leftArrow");
// let rightArrow = document.querySelectorAll(".rightArrow");
// console.log(sliderContainer);
// leftArrow[0].addEventListener('click', (e) =>{
//     console.log('left');
//     let sliderContainer = e.target.closest.querySelector('.tab-container');
//     scrollContainer(sliderContainer, -1);
// });


// rightArrow[0].addEventListener('click', (e)=> {
//     console.log('right');
//     let sliderContainer = e.target.closest.querySelector('.tab-container');
//     scrollContainer(sliderContainer, 1);
// });



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



