// nav hamburger js

let desktop = document.querySelector('.desktop-mobile');
let hambutton = document.querySelector('.hamburger-menu');
const withChild = document.querySelectorAll('.menu-item-has-children');
const children = document.querySelectorAll('.sub-menu');
let mobilemenu = document.querySelector('.mobile-menu-icon');
const pageItems = document.querySelectorAll('.menu-item');
const buttons = document.querySelectorAll('button');
const submitButtons = document.querySelectorAll('input[type="submit"]');
let searchbar = document.querySelector("#wp-block-search__input-1");
let searchButton = document.querySelector(".wp-block-search__button ");
const accordions = document.querySelectorAll(".mill-mountain-accordion-button");
const accordionSub = document.querySelectorAll(".accordion-sub-container");
const accordionParents = document.querySelectorAll(".wp-block-millmountain-accordion");
const mainMenu = document.querySelector(".menu-menu-container");
let customLogo = document.querySelector(".custom-logo-link");

function insertAfter(referenceNode, newNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}


customLogo.setAttribute("href", "/");


mainMenu.setAttribute("class", "menu");


buttons.forEach(item => {
    item.addEventListener('click', (e) => {
        item.classList.add('button-animation');
    })
})


submitButtons.forEach(item => {
    item.addEventListener('click', (e) => {
        item.classList.add('button-animation');
    })
})



children.forEach(item => {
    item.setAttribute("tabindex", "0");
    item.addEventListener('click', (e)=>{

        desktop.classList.toggle('open');
        hambutton.classList.toggle('spin');

    })
   
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
      
       newItem = e.target.closest(".menu-item");
    
      
        if (newItem.classList != "blink" ){
            newItem.classList.toggle('blink');
            desktop.classList.toggle('open');
            hambutton.classList.toggle('spin');
            
         


        }
        else if (newItem.classList == "blink"){
            newItem.classList.remove("blink");
            newItem.classList.add("blink");
             desktop.classList.toggle('open');
        hambutton.classList.toggle('spin');
         
        }
    })
})


accordionParents.forEach((item,index) => {
    let scrollWidth = accordionSub[index].screenX;
    let accordionIndex = 0

    accordionSub[index].addEventListener("scroll", (e) => {
        console.log(item.offsetX);
        console.log(item.getBoundingClientRect().right);
        console.log(item.getBoundingClientRect().left);
    })

    let numTabs = scrollWidth - 20 /400;
    let rightArrow = document.createElement('div');
    rightArrow.setAttribute('class', `right-arrow-${index} right`);
    rightArrow.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.65 419.3 32 384 32zM312.3 273.6l-112 104C195.8 381.8 189.9 384 184 384c-3.25 0-6.5-.6562-9.594-2C165.7 378.2 160 369.5 160 360v-208c0-9.531 5.656-18.19 14.41-22c8.75-3.75 18.94-2.062 25.94 4.406l112 104C317.2 242.1 320 249.3 320 256S317.2 269 312.3 273.6z"/></svg>';
    rightArrow.addEventListener('click', (e) => {
        
        accordionSub[index].scrollBy(400,0);
       accordionIndex++;
       console.log(accordionIndex);
       console.log(accordionSub[index].scrollWidth);
       console.log(e.offsetX);
     
    });

    let leftArrow = document.createElement('div');
    leftArrow.setAttribute('class', `left-arrow-${index} left`);
    leftArrow.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.65 419.3 32 384 32zM288 360c0 9.531-5.656 18.19-14.41 22C270.5 383.3 267.3 384 264 384c-5.938 0-11.81-2.219-16.34-6.406l-112-104C130.8 269 128 262.7 128 256s2.781-13.03 7.656-17.59l112-104c7.031-6.469 17.22-8.156 25.94-4.406C282.3 133.8 288 142.5 288 152V360z"/></svg>';
    leftArrow.addEventListener('click', (e) => {
        accordionSub[index].scrollBy(-400,0);
        accordionIndex--;
        console.log(accordionIndex);
        console.log(accordionSub[index].scrollWidth);
        console.log(e.offsetX);
        

       
    
       
    });


    
    
  

    item.insertBefore(leftArrow, accordionSub[index]);
    // item.insertAfter(rightArrow, accordionSub[index]);

   item.appendChild(rightArrow);

}); 
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



