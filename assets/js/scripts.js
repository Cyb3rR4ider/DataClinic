/**
 * add event listener on multiple elements
 */

const addEventOnElements = function (elements, eventType, callback) {
  for (let i = 0, len = elements.length; i < len; i++) {
    elements[i].addEventListener(eventType, callback);
  }
}



/**
 * PRELOADER
 */

const preloader = document.querySelector("[data-preloader]");

window.addEventListener("load", function () {
  preloader.classList.add("loaded");
  document.body.classList.add("loaded");
});



function scrollToDescription() {
  // Smooth scroll to the description section
  document.querySelector('#Description').scrollIntoView({
      behavior: 'smooth'
  });
  
  document.querySelector('.learn-more').classList.add('clicked');
}
