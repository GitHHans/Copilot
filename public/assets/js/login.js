$(document).ready(() => {
    const signupLink = $('#signup-link');
    const icon = $('#plane-icon');

    // Check if the signupLink element exists
    if (signupLink) {
        signupLink.on("click", (event) => {
            event.preventDefault()
            console.log("Sign up button cliascsadked");
            
            function moveImage() {
                icon.animate({ left: '10px' }, 3000, 'linear', () => {
                    icon.css('left', '0'); // Reset position after animation
                    moveImage(); // Recursively call to loop
                });
            }

            moveImage(); // Start the animation
            
        });
    } 

});
