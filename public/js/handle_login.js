/******/ (() => { // webpackBootstrap
/*!***********************************************************!*\
  !*** ./public/assets/js/client/functions/handle_login.js ***!
  \***********************************************************/
$(document).ready(function () {
  var signupLink = $('#signup-link');
  var icon = $('#plane-icon');

  // Check if the signupLink element exists
  if (signupLink) {
    signupLink.on("click", function (event) {
      event.preventDefault();
      console.log("Sign up button cliascsadked");
      function moveImage() {
        icon.animate({
          left: '10px'
        }, 3000, 'linear', function () {
          icon.css('left', '0'); // Reset position after animation
          moveImage(); // Recursively call to loop
        });
      }
      moveImage(); // Start the animation
    });
  }
});
/******/ })()
;