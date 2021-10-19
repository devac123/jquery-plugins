"use strict";
// ============ zoom out ========
// aos plugin



/* <link rel="stylesheet" href="assets/plugins/aos/aos.css"> */
/* <script src="assets/plugins/aos/aos.js"></script> */
// data-aos="zoom-out" data-aos-delay="100"
window.addEventListener('load', () => {
  AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: true,
    mirror: false
  })
});

var b = "a";
var b = "a";


// ================ typed js=========================

var typed = new Typed("#typed", {
  stringsElement: '#typed-strings',
  typeSpeed: 100,
  backSpeed: 100,
  backDelay: 500,
  startDelay: 1000,
  loop: true,
  smartBackspace: true,

});
