var toggleButton = document.querySelector('#hamburger-menu-checkbox');


//create an event listener on the button 
//1. select the button element


// 2. add a click event to your button
toggleButton.addEventListener('click',()=>{
    //what happens when the button is clicked goes inside this function, here.
    // we want to be able to show the nav
    toggleButton.classList.toggle('active');
    document.querySelector('.menu').classList.toggle('active');
    console.log('click');

});