
// ============ zoom out ========
// aos plugin



/* <link rel="stylesheet" href="assets/plugins/aos/aos.css"> */
/* <script src="assets/plugins/aos/aos.js"></script> */
// data-aos="zoom-out" data-aos-delay="100"
window.addEventListener('load', () => {
    AOS.init({
      duration: 1500,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

